import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

// Get all image files in the assets/images directory
function getAllImageFiles(dir) {
    const files = [];
    const items = fs.readdirSync(dir);

    for (const item of items) {
        const fullPath = path.join(dir, item);
        const stat = fs.statSync(fullPath);

        if (stat.isDirectory()) {
            files.push(...getAllImageFiles(fullPath));
        } else if (/\.(jpg|jpeg|png|gif|svg|webp)$/i.test(item)) {
            files.push(fullPath);
        }
    }

    return files;
}

// Get all referenced images from templates, configs, and CSS
function getReferencedImages() {
    const referenced = new Set();

    // Scan Blade templates
    const templateDir = path.join(__dirname, 'resources/views');
    scanDirectoryForImages(templateDir, referenced, ['.blade.php']);

    // Scan config files
    const configDir = path.join(__dirname, 'config');
    scanDirectoryForImages(configDir, referenced, ['.php']);

    // Scan SCSS files
    const sassDir = path.join(__dirname, 'resources/sass');
    scanDirectoryForImages(sassDir, referenced, ['.scss', '.css']);

    return referenced;
}

function scanDirectoryForImages(dir, referenced, extensions) {
    if (!fs.existsSync(dir)) return;

    const items = fs.readdirSync(dir);

    for (const item of items) {
        const fullPath = path.join(dir, item);
        const stat = fs.statSync(fullPath);

        if (stat.isDirectory()) {
            scanDirectoryForImages(fullPath, referenced, extensions);
        } else if (extensions.some((ext) => item.endsWith(ext))) {
            const content = fs.readFileSync(fullPath, 'utf8');

            // Find asset() references
            const assetMatches = content.match(/asset\(['"]([^'"]+)['"]\)/g);
            if (assetMatches) {
                assetMatches.forEach((match) => {
                    const imagePath = match.match(/asset\(['"]([^'"]+)['"]\)/)[1];
                    if (imagePath.startsWith('assets/images/')) {
                        referenced.add(imagePath);
                    }
                });
            }

            // Find direct image references in CSS
            const cssMatches = content.match(/url\(['"]?([^'")]+\.(jpg|jpeg|png|gif|svg|webp))['"]?\)/gi);
            if (cssMatches) {
                cssMatches.forEach((match) => {
                    const imagePath = match.match(/url\(['"]?([^'")]+\.(jpg|jpeg|png|gif|svg|webp))['"]?\)/i)[1];
                    if (imagePath.startsWith('../images/')) {
                        // Convert relative path to asset path
                        const assetPath = 'assets/images/' + imagePath.replace('../images/', '');
                        referenced.add(assetPath);
                    }
                });
            }

            // Find config references
            const configMatches = content.match(/['"](assets\/images\/[^'"]+)['"]/g);
            if (configMatches) {
                configMatches.forEach((match) => {
                    const imagePath = match.replace(/['"]/g, '');
                    referenced.add(imagePath);
                });
            }
        }
    }
}

// Main function
function findUnusedImages() {
    console.log('🔍 Scanning for unused images...');

    const imagesDir = path.join(__dirname, 'public/assets/images');
    const allImages = getAllImageFiles(imagesDir);
    const referencedImages = getReferencedImages();

    console.log(`📊 Found ${allImages.length} total images`);
    console.log(`📊 Found ${referencedImages.size} referenced images`);

    // Convert referenced paths to full file paths for comparison
    const referencedPaths = new Set();
    referencedImages.forEach((relPath) => {
        const fullPath = path.join(__dirname, 'public', relPath);
        referencedPaths.add(fullPath);
    });

    // Find unused images
    const unusedImages = allImages.filter((imgPath) => !referencedPaths.has(imgPath));

    console.log(`\n🗑️  Found ${unusedImages.length} unused images:`);

    let totalSize = 0;
    unusedImages.forEach((imgPath) => {
        const stat = fs.statSync(imgPath);
        const sizeKB = Math.round(stat.size / 1024);
        totalSize += stat.size;
        const relativePath = path.relative(imagesDir, imgPath);
        console.log(`   - ${relativePath} (${sizeKB}KB)`);
    });

    console.log(`\n💾 Total space that can be freed: ${Math.round((totalSize / 1024 / 1024) * 100) / 100}MB`);

    return unusedImages;
}

// Run the analysis
const unusedImages = findUnusedImages();

// Ask for confirmation before deletion
if (unusedImages.length > 0) {
    console.log('\n⚠️  These images appear to be unused. Do you want to delete them?');
    console.log('   Run: node find-unused-images.js --delete to remove them');
} else {
    console.log('\n✅ No unused images found!');
}

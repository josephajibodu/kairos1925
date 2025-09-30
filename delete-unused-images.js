import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

// Images that are actually being used (from our analysis)
const usedImages = [
    // Gallery images (optimized versions)
    'assets/images/gallery/kairos-1.png',
    'assets/images/gallery/kairos-2.png',
    'assets/images/gallery/kairos-3.png',
    'assets/images/gallery/kairos-4.png',
    'assets/images/gallery/kairos-5.png',
    'assets/images/gallery/kairos-6.png',
    'assets/images/gallery/kairos-7.png',
    'assets/images/gallery/kairos-8.png',
    'assets/images/gallery/kairos-9.png',
    'assets/images/gallery/kairos-10.png',
    'assets/images/gallery/kairos-1.webp',
    'assets/images/gallery/kairos-2.webp',
    'assets/images/gallery/kairos-3.webp',
    'assets/images/gallery/kairos-4.webp',
    'assets/images/gallery/kairos-5.webp',
    'assets/images/gallery/kairos-6.webp',
    'assets/images/gallery/kairos-7.webp',
    'assets/images/gallery/kairos-8.webp',
    'assets/images/gallery/kairos-9.webp',
    'assets/images/gallery/kairos-10.webp',

    // Couple images
    'assets/images/couple/bride.png',
    'assets/images/couple/groom.png',
    'assets/images/couple/left.svg',
    'assets/images/couple/right.svg',

    // Hero/Slider images
    'assets/images/slider/hero_.png',
    'assets/images/slider/shape1.svg',
    'assets/images/slider/shape2.svg',
    'assets/images/slider/shape3.svg',
    'assets/images/slider/shape4.svg',
    'assets/images/slider/shape5.svg',
    'assets/images/slider/shape6.svg',
    'assets/images/slider/bg-shape.png',

    // Story images
    'assets/images/story/story-1.png',
    'assets/images/story/story-2.png',
    'assets/images/story/story-3.png',
    'assets/images/story/shape.png',
    'assets/images/story/shape2.png',
    'assets/images/story/shape3.png',
    'assets/images/story/flower-shape1.svg',
    'assets/images/story/flower-shape2.svg',
    'assets/images/story/flower-shape3.svg',
    'assets/images/story/flower-shape4.svg',

    // Event images
    'assets/images/event/1.png',
    'assets/images/event/2.png',

    // Team images
    'assets/images/team/img-1.jpg',
    'assets/images/team/img-2.jpg',
    'assets/images/team/img-3.jpg',
    'assets/images/team/img-4.jpg',
    'assets/images/team/mask-1.svg',
    'assets/images/team/mask-2.svg',
    'assets/images/team/mask-3.svg',
    'assets/images/team/mask-4.svg',

    // Footer images
    'assets/images/footer-shape-1.svg',
    'assets/images/footer-shape-2.svg',

    // Gift section images
    'assets/images/blog/shape-1.svg',
    'assets/images/blog/shape-2.svg',

    // RSVP images
    'assets/images/rsvp/shape.svg',
    'assets/images/rsvp/shape2.svg',
    'assets/images/rsvp/shape3.svg',
    'assets/images/rsvp/shape4.svg',
    'assets/images/rsvp/shape5.svg',
    'assets/images/rsvp/shape6.svg',

    // Preloader
    'assets/images/preloader-new2.gif',

    // Favicon
    'assets/images/favicon.png',

    // Shop mini cart (from header)
    'assets/images/shop/mini-cart/img-1.jpg',
    'assets/images/shop/mini-cart/img-2.jpg',

    // CSS referenced images
    'assets/images/select-icon.png',
    'assets/images/select-icon2.png',
    'assets/images/date.png',
    'assets/images/date2.png',
    'assets/images/date-bg.png',
    'assets/images/page-title.jpg',
    'assets/images/bg-2.jpg',
    'assets/images/Single-title-shape2.png',
];

function deleteUnusedImages() {
    console.log('🗑️  Deleting unused images...');

    const imagesDir = path.join(__dirname, 'public/assets/images');
    const allImages = getAllImageFiles(imagesDir);

    let deletedCount = 0;
    let deletedSize = 0;
    let keptCount = 0;

    allImages.forEach((imgPath) => {
        const relativePath = path.relative(imagesDir, imgPath);
        const assetPath = 'assets/images/' + relativePath.replace(/\\/g, '/');

        if (usedImages.includes(assetPath)) {
            keptCount++;
            console.log(`✅ Keeping: ${relativePath}`);
        } else {
            try {
                const stat = fs.statSync(imgPath);
                deletedSize += stat.size;
                fs.unlinkSync(imgPath);
                deletedCount++;
                console.log(`🗑️  Deleted: ${relativePath}`);
            } catch (error) {
                console.log(`❌ Error deleting ${relativePath}: ${error.message}`);
            }
        }
    });

    console.log(`\n📊 Summary:`);
    console.log(`   ✅ Kept: ${keptCount} images`);
    console.log(`   🗑️  Deleted: ${deletedCount} images`);
    console.log(`   💾 Space freed: ${Math.round((deletedSize / 1024 / 1024) * 100) / 100}MB`);
}

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

// Run deletion
deleteUnusedImages();

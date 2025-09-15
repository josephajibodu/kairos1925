<?php

use App\Http\Controllers\WeddingController;
use Illuminate\Support\Facades\Route;

// Wedding Template Routes
Route::get('/', [WeddingController::class, 'home'])->name('home');
Route::get('/about', [WeddingController::class, 'about'])->name('about');
Route::get('/story', [WeddingController::class, 'story'])->name('story');
Route::get('/gallery', [WeddingController::class, 'gallery'])->name('gallery');
Route::get('/rsvp', [WeddingController::class, 'rsvp'])->name('rsvp');
Route::post('/rsvp', [WeddingController::class, 'storeRsvp'])->name('rsvp.store');
Route::get('/contact', [WeddingController::class, 'contact'])->name('contact');
Route::post('/contact', [WeddingController::class, 'storeContact'])->name('contact.store');
Route::get('/accommodation', [WeddingController::class, 'accommodation'])->name('accommodation');
Route::get('/planners', [WeddingController::class, 'planners'])->name('planners');
Route::get('/team-single', [WeddingController::class, 'teamSingle'])->name('team-single');
Route::get('/groom-bride', [WeddingController::class, 'groomBride'])->name('groom-bride');
Route::get('/services', [WeddingController::class, 'services'])->name('services');
Route::get('/service-single', [WeddingController::class, 'serviceSingle'])->name('service-single');
Route::get('/pricing', [WeddingController::class, 'pricing'])->name('pricing');

// Portfolio Routes
Route::get('/portfolio', [WeddingController::class, 'portfolio'])->name('portfolio');
Route::get('/portfolio-masonry', [WeddingController::class, 'portfolioMasonry'])->name('portfolio-masonry');
Route::get('/portfolio-masonry-s2', [WeddingController::class, 'portfolioMasonryS2'])->name('portfolio-masonry-s2');
Route::get('/portfolio-masonry-s3', [WeddingController::class, 'portfolioMasonryS3'])->name('portfolio-masonry-s3');
Route::get('/portfolio-single', [WeddingController::class, 'portfolioSingle'])->name('portfolio-single');

// Shop Routes
Route::get('/shop', [WeddingController::class, 'shop'])->name('shop');
Route::get('/shop-single', [WeddingController::class, 'shopSingle'])->name('shop-single');
Route::get('/cart', [WeddingController::class, 'cart'])->name('cart');
Route::get('/wishlist', [WeddingController::class, 'wishlist'])->name('wishlist');
Route::get('/checkout', [WeddingController::class, 'checkout'])->name('checkout');

// Blog Routes
Route::get('/blog', [WeddingController::class, 'blog'])->name('blog');
Route::get('/blog-left-sidebar', [WeddingController::class, 'blogLeftSidebar'])->name('blog-left-sidebar');
Route::get('/blog-fullwidth', [WeddingController::class, 'blogFullwidth'])->name('blog-fullwidth');
Route::get('/blog-single', [WeddingController::class, 'blogSingle'])->name('blog-single');
Route::get('/blog-single-left-sidebar', [WeddingController::class, 'blogSingleLeftSidebar'])->name('blog-single-left-sidebar');
Route::get('/blog-single-fullwidth', [WeddingController::class, 'blogSingleFullwidth'])->name('blog-single-fullwidth');

// Other Routes
Route::get('/coming-soon', [WeddingController::class, 'comingSoon'])->name('coming-soon');
Route::get('/404', [WeddingController::class, 'error404'])->name('404');
Route::get('/invitation', [WeddingController::class, 'invitation'])->name('invitation');
Route::get('/search', [WeddingController::class, 'search'])->name('search');

Route::get('/dashboard', function () {})->middleware('auth')->name('dashboard');


require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FruitsController;

// Frontend (fruits) routes. Include this file from routes/web.php with:
// require __DIR__ . '/fruits.php';

Route::name('fruits.')->group(function () {
    Route::get('/', [FruitsController::class, 'home'])->name('home');
    Route::get('/shop', [FruitsController::class, 'shop'])->name('shop');
    Route::get('/shop/{slug}', [FruitsController::class, 'shopDetail'])->name('shop.detail');
    Route::get('/contact', [FruitsController::class, 'contact'])->name('contact');
    Route::get('/cart', [FruitsController::class, 'cart'])->name('cart');
    Route::get('/checkout', [FruitsController::class, 'checkout'])->name('checkout');
    Route::get('/testimonial', [FruitsController::class, 'testimonial'])->name('testimonial');
});

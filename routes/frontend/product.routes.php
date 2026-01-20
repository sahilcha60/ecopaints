<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ProductController;

Route::prefix('product')->group(function () {

    // Show all portfolios
    Route::get('/category/{category_slug}/{subcategory_slug}', [ProductController::class, 'subcategoryProducts'])
        ->name('subcategory.products');

    // Show single portfolio item
    Route::get('/category/{category_slug}/{subcategory_slug}/{product_slug}', [ProductController::class, 'single'])
        ->name('product.single');

});

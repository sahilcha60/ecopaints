<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\CategoryController;

Route::prefix('category')->group(function () {

    // Show all portfolios
    Route::get('/', [CategoryController::class, 'index'])
        ->name('category');

    // Show single portfolio item
    Route::get('/{slug}', [CategoryController::class, 'slug'])
        ->name('category.sub');

});

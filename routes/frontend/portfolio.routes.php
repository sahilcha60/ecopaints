<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PortfolioController;

Route::prefix('portfolio')->group(function () {

    // Show all portfolios
    Route::get('/', [PortfolioController::class, 'index'])
        ->name('portfolio');

    // Show single portfolio item
    Route::get('/{slug}', [PortfolioController::class, 'single'])
        ->name('portfolio.single');

});

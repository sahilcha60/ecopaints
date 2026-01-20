<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\MainController;

Route::get('/', [MainController::class, 'homepage'])->name('homepage');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');

require_once __DIR__.'/category.routes.php';
require_once __DIR__.'/product.routes.php';
require_once __DIR__.'/portfolio.routes.php';

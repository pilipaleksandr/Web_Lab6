<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

Route::get('/', [CategoryController::class, 'index']);
Route::get('/categories/{category}', [CategoryController::class, 'show']);
Route::get('/products/{product}', [ProductController::class, 'show']);

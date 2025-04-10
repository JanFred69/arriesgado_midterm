<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::apiResource('products', ProductController::class);
oute::apiResource('categories', CategoryController::class);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ProductCategoriesController;
use App\Http\Controllers\Api\PasswordController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    // user
    Route::post('/update-password', [PasswordController::class, 'update']);
    Route::post('/logout', [AuthController::class, 'logout']);

    // product categories
    Route::get('/categories', [ProductController::class, 'categories']);
    Route::post('/product-categories', [ProductCategoriesController::class, 'store']);

    // product
    Route::get('/products', [ProductController::class, 'index']);
    Route::post('/products', [ProductController::class, 'store']);
    Route::get('/products/{id}', [ProductController::class, 'show']);
    Route::put('/products/{id}', [ProductController::class, 'update']);
    Route::delete('/products/{id}', [ProductController::class, 'destroy']);
});

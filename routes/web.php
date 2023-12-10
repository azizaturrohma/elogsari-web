<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\ProductsController;

Route::get('/', [WeatherController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/add-product', [ProductsController::class, 'create'])->name('add-product');
    Route::post('/add-product', [ProductsController::class, 'store']);

    Route::get('/update-password', [PasswordController::class, 'index'])->name('update-password');
    Route::post('/update-password', [PasswordController::class, 'update']);

    Route::get('/logout', [LoginController::class, 'logout']);
});

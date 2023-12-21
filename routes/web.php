<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductsController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/product/{id}', [ProductController::class, 'show']);

Route::get('/products/{category_id}', [ProductController::class, 'showByCategory']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    // product
    Route::get('/products', [ProductsController::class, 'index'])->name('products');

    Route::get('/add-product', [ProductsController::class, 'create'])->name('add-product');
    Route::post('/add-product', [ProductsController::class, 'store']);

    Route::get('/edit-product', [ProductsController::class, 'edit'])->name('edit-product');
    Route::post('/update-product', [ProductsController::class, 'update'])->name('update-product');

    Route::delete('/delete-product', [ProductsController::class, 'update'])->name('delete-product');

    // user
    Route::get('/update-password', [PasswordController::class, 'index'])->name('update-password');
    Route::post('/update-password', [PasswordController::class, 'update'])->name('update-password');

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

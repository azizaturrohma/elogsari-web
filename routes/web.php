<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\PasswordController;


Route::get('/weather', [WeatherController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/update-password', [PasswordController::class, 'index']);
Route::post('/update-password', [PasswordController::class, 'update']);

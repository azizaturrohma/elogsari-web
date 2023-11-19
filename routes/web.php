<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PasswordController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/weather', [WeatherController::class, 'index']);

// Route::get('/login', [LoginController::class, 'index'])->name('login');
// Route::post('/login', [LoginController::class, 'login']);
// Route::post('/logout', [LoginController::class, 'logout']);
// Route::get('/update-password', [PasswordController::class, 'index']);
// Route::post('/update-password', [PasswordController::class, 'update']);

// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

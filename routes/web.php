<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;

// Public routes
Route::middleware(['web'])->group(function () {
    // Authentication routes
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('login.post');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register'])->name('register.post');
});

// Protected routes
Route::middleware(['web', 'auth'])->group(function () {
    // Default route
    Route::get('/', function () {
        return redirect()->route('products.index');
    });

    // Products routes
    Route::resource('products', ProductController::class);
});

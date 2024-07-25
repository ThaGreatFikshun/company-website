<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ReviewController;

// Home route
Route::get('/', function () {
    return view('home');
})->name('home');

// About Us route
Route::get('/about', function () {
    return view('about');
})->name('about');

//  Dashboard route 
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

// Profile route
Route::get('/profile', [ProjectController::class, 'index'])->name('profile');

// Contact Us route
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Login routes
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'customLogin'])->name('login.submit');

// Registration routes
Route::get('/register', [AuthController::class, 'registration'])->name('register');
Route::post('/register', [AuthController::class, 'customRegistration'])->name('register.custom');

// Logout route
Route::post('/logout', [AuthController::class, 'signOut'])->name('signout');

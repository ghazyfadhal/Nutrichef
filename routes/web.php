<?php

use App\Http\Controllers\landingPageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\signupController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/landingpage', [landingPageController::class, 'index'])->name('landingpage');
Route::post('/landingpage', [landingPageController::class, 'store'])->name('store');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('showLoginForm');
Route::post('/login', [LoginController::class, 'processLogin'])->name('login.process');

Route::get('/signup', [signupController::class, 'showSignUpForm'])->name('showSignUpForm');
Route::post('/signup', [signupController::class, 'store'])->name('signup.store');
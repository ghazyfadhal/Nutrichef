<?php

use App\Http\Controllers\landingPageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\signupController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/landingpage', [landingPageController::class, 'index']);
Route::post('/landingpage', [landingPageController::class, 'store'])->name('store');

Route::get('/login', [loginController::class, 'showLoginForm'])->name('showLoginForm');

Route::get('/signup', [signupController::class, 'showSignUpForm'])->name('showSignUpForm');
<?php

use App\Http\Controllers\landingPageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\signupController;
use App\Http\Controllers\landingRecController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\ReviewController;

Route::get('/landingpage', [LandingPageController::class, 'index'])->name('landingpage');
    // ->middleware('auth');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/loginuser', [LoginController::class, 'processLogin'])->name('login.process');
// Route home yang mengarahkan ke landingpage
Route::get('/home', function () {
    if (\Illuminate\Support\Facades\Auth::check()) {
        return redirect()->route('landingpage');
    } else {
        return redirect()->route('login');
    }
})->name('home');

// Route untuk logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/signup', [signupController::class, 'showSignUpForm'])->name('showSignUpForm');
Route::post('/signup_store', [signupController::class, 'store'])->name('signup.store');

Route::get('/rekomendasi', [landingRecController::class, 'index'])->name('landingRec');
Route::get('/rekomendasi/{resepID}', [landingRecController::class, 'show'])->name('landingRec.show');

Route::get('/resep/{id}', [RecipeController::class, 'show'])->name('recipes.detail');
// Route ke halaman daftar resep
Route::get('/resep', [RecipeController::class, 'index'])->name('recipes.index');

Route::get('/upload', [RecipeController::class, 'create'])->name('recipes.upload');
Route::post('/upload', [RecipeController::class, 'store'])->name('recipes.store');

Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

// Tampilkan halaman pencarian (filter)
Route::get('/search', [SearchController::class, 'index'])->name('search.index');

// Proses pencarian
Route::match(['GET', 'POST'], '/search', [SearchController::class, 'search'])->name('search');
Route::post('/bookmark', [BookmarkController::class, 'store'])->middleware('auth')->name('bookmark.store');
Route::get('/cek-auth', function () {
    return response()->json([
        'is_logged_in' => Auth::check(),
        'user' => Auth::user(),
    ]);
});
// Route untuk menyimpan ulasan (POST)
Route::post('/review', [ReviewController::class, 'store'])
    ->middleware('web')  // Opsional, gunakan jika user harus login untuk membuat ulasan
    ->name('review.store');

// Route untuk menampilkan semua ulasan pada satu resep (GET)
Route::get('/reviews/{resepID}', [ReviewController::class, 'index'])->name('review.index');

// Route untuk detail resep beserta ulasannya (GET)
Route::get('/resep/{resepID}', [ReviewController::class, 'show'])->name('resep.detail');
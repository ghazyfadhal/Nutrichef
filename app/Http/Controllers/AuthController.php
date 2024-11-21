<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // Pastikan file Blade 'auth/login.blade.php' tersedia
    }
}

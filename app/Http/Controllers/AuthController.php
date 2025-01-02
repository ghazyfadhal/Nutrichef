<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login'); // Pastikan file Blade 'auth/login.blade.php' tersedia
    }
}

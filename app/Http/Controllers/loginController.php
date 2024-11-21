<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Menampilkan halaman login
    public function showLoginForm()
    {
        return view('login');
    }

    // Proses login
    public function processLogin(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Proses autentikasi
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Jika login berhasil
            return redirect()->route('home')->with('success', 'Login berhasil!');
        }

        // Jika login gagal
        return back()->with('error', 'Email atau password salah!');
    }

    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logout berhasil!');
    }
}

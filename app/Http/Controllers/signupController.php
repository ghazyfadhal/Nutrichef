<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class signupController extends Controller
{
    public function showSignUpForm(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Simpan pengguna baru ke database
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirect ke halaman login atau dashboard
        return redirect()->route('login')->with('success', 'Sign up berhasil! Silakan login.');
    }
}
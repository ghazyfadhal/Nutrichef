<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Pastikan model User digunakan
use Illuminate\Support\Facades\Hash;

class signupController extends Controller
{
    // Menampilkan formulir signup
    public function showSignUpForm()
    {
        return view('signup'); // Pastikan file `signup.blade.php` ada di `resources/views`
    }

    // Menyimpan data pengguna
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Sign up berhasil! Silakan login.');
    }
}

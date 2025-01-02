<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Pastikan model User digunakan
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    // Menampilkan formulir signup
    public function showSignUpForm()
    {
        return view('signup'); // Pastikan file `signup.blade.php` ada di `resources/views`
    }

    // Menyimpan data pengguna
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:user,email', // Pastikan field `email` sesuai di DB
            // 'password' => 'required|string|min:8|confirmed', // Tambahkan konfirmasi password
        ]);      

        // Simpan data pengguna ke database
        User::create([
            'username' => $request->username,  // Gunakan huruf kecil
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);        

        // Redirect ke halaman login dengan pesan sukses
        return redirect()->route('login')->with('success', 'Sign up berhasil! Silakan login.');
    }
}

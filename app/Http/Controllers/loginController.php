<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;  // Pastikan Model User ada
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    // Menampilkan halaman login
    public function showLoginForm()
    {
        return view('login');
    }

    // Proses login tanpa menggunakan Auth
    public function processLogin(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cari user berdasarkan email
        $user = User::where('email', $request->email)->first();

        // Cek apakah user ditemukan dan password cocok
        if ($user && Hash::check($request->password, $user->password)) {
            // Simpan informasi user di session
            session(['user' => $user]);

            // Redirect ke home atau landingpage
            return redirect()->route('landingpage')->with('success', 'Login berhasil!');
        } else {
            // Jika gagal, kembali ke halaman login
            return redirect()->route('login')->withErrors([
                'error' => 'Email atau password salah.'
            ]);
        }
    }

    // Logout manual
    public function logout()
    {
        // Hapus session
        session()->forget('user');
        return redirect()->route('login')->with('success', 'Logout berhasil!');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }
    protected function authenticated(Request $request, $user)
    {
        // Ambil data bookmark dari session
        $favoritSession = session()->get('favorit', []);

        foreach ($favoritSession as $resepId) {
            // Cek apakah sudah ada di database
            $favoritExist = Favorit::where('user_id', $user->id)
                                   ->where('resep_id', $resepId)
                                   ->exists();

            if (!$favoritExist) {
                // Simpan ke database jika belum ada
                Favorit::create([
                    'user_id' => $user->id,
                    'resep_id' => $resepId,
                ]);
            }
        }

        // Hapus session setelah migrasi
        session()->forget('favorit');

        // Redirect ke halaman sebelumnya
        return redirect()->intended('/');
    }
}

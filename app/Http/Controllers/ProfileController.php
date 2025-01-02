<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;  // Model User untuk mengambil data pengguna
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    // Tampilkan halaman profil
    public function show()
    {
        $user = Auth::user();  // Ambil data user yang sedang login
        return view('profilPage', compact('user'));
    }

    // Update profil pengguna
    public function update(Request $request)
    {
        $user = Auth::user();

        // Validasi input
        $validated = $request->validate([
            'username' => 'required|max:100',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:6|confirmed',
        ]);

        // Update data pengguna
        $user->username = $validated['username'];
        $user->email = $validated['email'];

        if ($request->filled('password')) {
            $user->password = bcrypt($validated['password']);
        }

        $user->save();

        return redirect()->route('profile.show')->with('success', 'Profile updated successfully!');
    }
}

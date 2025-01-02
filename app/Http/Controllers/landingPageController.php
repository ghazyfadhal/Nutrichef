<?php

namespace App\Http\Controllers;

use App\Models\LandingPage;
use App\Models\Resep;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class landingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data resep dan data user yang sedang login
        $items = resep::all();
        $user = Auth::user();  // Ambil user yang sedang login

        return view('landingpage', compact('items', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|max:100',
            'password' => 'required|max:100'
        ]);

        // Simpan data user baru
        User::create($request->all());
        
        return redirect()->route('user.store')->with('success', 'User berhasil ditambahkan.');
    }
}

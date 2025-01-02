<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resep;

class landingRecController extends Controller
{
    /**
     * Menampilkan halaman rekomendasi resep.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Ambil rekomendasi resep berdasarkan rank tertinggi
        $rekomendasiResep = Resep::orderBy('created_at', 'desc')->get();

        // Debugging (cek apakah data tersedia)
        if ($rekomendasiResep->isEmpty()) {
            dd('No data found');
        }

        // Kirim data ke view jika tersedia
        return view('landingRec', compact('rekomendasiResep'));
    }

    /**
     * Menampilkan detail resep tertentu.
     *
     * @param int $resepID
     * @return \Illuminate\View\View
     */
    public function show($resepID)
    {
        // Cari resep berdasarkan resepID
        $resep = Resep::where('resepID', $resepID)->firstOrFail();

        // Kembalikan ke view detail resep
        return view('landingRec.show', compact('resep'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'komentar' => 'required|string|max:255',
            'bintang' => 'required|integer|min:1|max:5',
            'resepID' => 'required|exists:resep,resepID', // Validasi: resepID harus ada di tabel reseps
        ]);
        
        // try {
            // Simpan Review
            $review = new Review();
            $review->resepID = $validated['resepID'];
            $review->komentar = $validated['komentar'];
            $review->bintang = $validated['bintang'];
            $review->userID = 1;
            $review->save();

            // Optional: Update nilai rata-rata bintang di tabel Resep
            // $resep = Resep::find($validated['resepID']);
            // if ($resep) {
            //     // Hitung rata-rata bintang dari semua review
            //     $averageBintang = Review::where('resepID', $validated['resepID'])->avg('bintang');
            //     $resep->bintang = round($averageBintang, 1); // Simpan rata-rata dengan 1 desimal
            //     $resep->save();
            // }

            return response()->json([
                'status' => 'success',
                'message' => 'Ulasan berhasil disimpan!',
            ]);
        // } catch (\Exception $e) {
        //     return response()->json([
        //         'status' => 'error',
        //         'message' => 'Terjadi kesalahan saat menyimpan ulasan.',
        //     ], 500);
        // }
    }


    // Ambil Semua Ulasan untuk Resep
    public function index($resepID)
    {
        $reviews = Review::where('resepID', $resepID)->with('user')->get();
        return response()->json($reviews);
    }
    public function show($reviewID)
    {
        // Ambil data resep dan ulasan
        $resep = Resep::with('user')->findOrFail($resepID);
        $reviews = Review::where('resepID', $reviewID)->with('user')->get();

        // Kirim ke view
        return view('resep.detailRecipes', compact('resep', 'reviews'));
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    // Tampilkan halaman pencarian dengan filter
    public function index(Request $request)
    {
        $query = Resep::query();
        $keyword = $request->input('query', ''); // Ambil keyword dari input, default kosong jika tidak ada

        // Filter berdasarkan keyword (namaResep dan deskripsi)
        if (!empty($keyword)) {
            $query->where(function ($q) use ($keyword) {
                $q->where('namaResep', 'like', '%' . $keyword . '%')
                ->orWhere('deskripsi', 'like', '%' . $keyword . '%');
            });
        }

        // Filter berdasarkan Ingredients
        if ($request->filled('ingredients')) {
            $query->where('bahan', 'like', '%' . $request->input('ingredients') . '%');
        }

        // Filter berdasarkan Kategori (Breakfast, Lunch, Dinner)
        if ($request->filled('kategori')) {
            $query->where('kategori', $request->input('kategori'));
        }

        // Filter berdasarkan nutrisi (sugar, fat, carb, protein)
        foreach (['sugar', 'fat', 'carb', 'protein'] as $nutrient) {
            if ($request->filled($nutrient)) {
                $query->where($nutrient, '<=', (int)$request->input($nutrient));  // Cast ke integer
            }
        }

        // Filter berdasarkan Tags (Keto, Paleo, Plant-based, dll.)
        if ($request->filled('tags')) {
            $tags = explode(',', $request->input('tags'));
            $query->where(function ($q) use ($tags) {
                foreach ($tags as $tag) {
                    $q->orWhere('tags', 'like', '%' . trim($tag) . '%');
                }
            });
        }

        // Eksekusi query dan ambil hasil
        $results = $query->get();

        // Kirim keyword dan hasil ke view
        return view('searchPage', compact('results', 'keyword'));
    }


    // Proses pencarian spesifik berdasarkan nama atau deskripsi
    public function search(Request $request)
    {
        $keyword = $request->input('query', '');  // Default kosong jika tidak ada keyword

        // Query pencarian berdasarkan nama dan deskripsi resep
        $results = Resep::where('namaResep', 'like', '%' . $keyword . '%')
                        ->orWhere('deskripsi', 'like', '%' . $keyword . '%')
                        ->get();

        return view('searchPage', compact('results', 'keyword'));
    }
}

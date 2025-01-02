<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resep; // Model Resep harus sesuai dengan tabel resep di database
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class RecipeController extends Controller
{
    /**
     * Menampilkan detail resep.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function create() {
        $user = Auth::user();  // Menggunakan Auth untuk user yang sedang login
        return view('uploadRecipe', compact('user'));
    }
    public function store(Request $request) {
        $validated = $request->validate([
            'namaResep' => 'required',
            'deskripsi' => 'required',
            'serving' => 'required|numeric',
            'cookTime' => 'required|numeric',
            'kategori' => 'required',
            'bahan' => 'required',
            'steps' => 'required',
        ]);

        $nutritionMapping = [
            'low' => 0,
            'high' => 1,
        ];
    
        $resep = new Resep();
        $resep->namaResep = $validated['namaResep'];
        $resep->deskripsi = $validated['deskripsi'];
        $resep->serving = $validated['serving'];
        $resep->cookTime = $validated['cookTime'];
        $resep->kategori = $validated['kategori'];
        $resep->bahan = $validated['bahan'];
        $resep->steps = $validated['steps'];
    
        // Nutrisi
        $resep->sugar = $request->input('sugar', 'low');
        $resep->fat = $request->input('fat', 'low');
        $resep->carb = $request->input('carb', 'low');
        $resep->protein = $request->input('protein', 'low');
    
        // Tags
        $resep->tags = $request->input('tags', '');
    
        // Foto Resep
        if ($request->hasFile('fotoResep')) {
            $path = $request->file('fotoResep')->store('images', 'public');
            $resep->fotoResep = $path;
        }
    
        // Simpan ID User yang sedang login
        $resep->userID = Auth::id();
    
        $resep->save();
        if (!$resep->resepID) {
            return redirect()->route('recipes.index')->with('error', 'Recipe upload failed.');
        }
        return redirect()->route('recipes.detail', ['id' => $resep->resepID])->with('success', 'Recipe uploaded successfully!');
    }
    // public function show($resepID)
    // {   
    //     // Ambil detail resep berdasarkan resepID
    //     $resep = Resep::where('resepID', $resepID)->first();

    //     // Jika tidak ditemukan, tampilkan pesan error atau redirect
    //     if (!$resep) {
    //         return view('recipes.index', compact('resep'))->with('error', 'Resep tidak ditemukan.');
    //     }

    //     // Kirim data ke view
    //     return view('detailRecipes', compact('resep'));

    // }
    public function show($resepID)
    {
        // Ambil data resep berdasarkan ID
        $resep = Resep::where('resepID', $resepID)->first();
        
        if (!$resep) {
            return view('recipes.index', compact('resep'))->with('error', 'Resep tidak ditemukan.');
        }
        // Ambil semua ulasan terkait dengan resep ini
        $reviews = Review::where('resepID', $resepID)->with('user')->get();
        
        // Kirim data resep dan ulasan ke view
        return view('detailRecipes', compact('resep', 'reviews'));
    }
    public function index(Request $request)
    {
        $query = Resep::query();

        // Filter berdasarkan tags
        if ($request->has('tags')) {
            $tags = $request->input('tags');
            $query->filterByTags($tags);
        }

        // Filter berdasarkan nutrisi (opsional)
        if ($request->has('sugar') || $request->has('fat') || $request->has('carb') || $request->has('protein')) {
            $nutrition = $request->only(['sugar', 'fat', 'carb', 'protein']);
            $query->filterByNutrition($nutrition);
        }

        $results = $query->get();

        return view('searchPage', compact('results'));

        // Ambil semua data resep dari database
        $resep = Resep::all();
        $user = Auth::user();  // Ambil user yang sedang login
        // Kirim data ke view
        return view('detailRecipes', compact('resep'));
    }
}    

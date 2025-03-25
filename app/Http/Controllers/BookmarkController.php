<?php
namespace App\Http\Controllers;
use Log;
use App\Models\Favorit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{
    public function store(Request $request)
    {
        
            $favorit = Favorit::firstOrCreate([
                'userID' => Auth::userID(),
                'resepID' => $request->resepID
            ]);

            return response()->json(['message' => 'Bookmark berhasil ditambahkan'], 201);
        
    }

    // public function destroy($id)
    // {
    //     try {
    //         $favorit = Favorit::where('user_id', Auth::id())->where('resep_id', $id)->first();
    //         if ($favorit) {
    //             $favorit->delete();
    //             return response()->json(['message' => 'Bookmark berhasil dihapus']);
    //         }

    //         return response()->json(['error' => 'Bookmark tidak ditemukan'], 404);
    //     } catch (\\Exception $e) {
    //         return response()->json(['error' => 'Terjadi kesalahan, coba lagi nanti'], 500);
    //     }
    // }
}


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
        if (!Auth::check()) {
            return response()->json([
                'message' => 'Anda harus login untuk menyimpan bookmark.'
            ], 403);  // 403 = Forbidden
        }

        try {
            $request->validate([
                'resepID' => 'required|exists:resep,resepID',
            ]);

            $bookmark = Favorit::firstOrCreate([
                'userID' => Auth::id(),
                'resepID' => $request->resepID,
            ]);

            return response()->json([
                'message' => 'Bookmark berhasil disimpan!',
                'bookmark' => $bookmark
            ]);
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return response()->json([
                'message' => 'Terjadi kesalahan: ' . $e->getMessage(),
            ], 500);
        }
    }
}


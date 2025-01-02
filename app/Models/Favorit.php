<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorit extends Model
{
    use HasFactory;

    protected $table = 'favorit';  // Menggunakan tabel favorit
    protected $fillable = ['userID', 'resepID'];  // Kolom yang dapat diisi secara massal
    public function resep()
    {
        return $this->belongsTo(Resep::class, 'resepID');
    }
}

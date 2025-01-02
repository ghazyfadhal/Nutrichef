<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    // Tentukan nama tabel secara eksplisit
    protected $table = 'ulasan';
    protected $primaryKey = 'reviewID';
    public $timestamps = false;
    protected $fillable = ['userID', 'resepID', 'komentar', 'bintang'];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class, 'userID', 'userID');
    }

    // Relasi ke Resep
    public function resep()
    {
        return $this->belongsTo(Resep::class, 'resepID', 'resepID');
    }
}
cookie('laravel_session', session()->getId());
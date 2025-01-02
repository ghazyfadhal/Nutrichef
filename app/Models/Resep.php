<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    use HasFactory;

    protected $table = 'resep'; // Nama tabel di database
    protected $primaryKey = 'resepID'; // Primary key sesuai tabel
    public $incrementing = true; // Primary key auto increment
    protected $keyType = 'int'; // Tipe data primary key (integer)
    
    // Timestamps (created_at) diaktifkan
    public $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = null;  // Tidak ada kolom updated_at

    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'userID',
        'adminID',
        'namaResep',
        'deskripsi',
        'fotoResep',
        'serving',
        'cookTime',
        'kategori',
        'bahan',
        'steps',
        'sugar',
        'fat',
        'carb',
        'protein',
        'kalori',
        'tags',
        'created_at',
    ];
    // Accessor untuk memformat tags menjadi array
    public function getTagsAttribute($value)
    {
        return explode(',', $value);
    }
 
    // Mutator untuk menyimpan tags dalam bentuk string
    public function setTagsAttribute($value)
    {
        $this->attributes['tags'] = is_array($value) ? implode(',', $value) : $value;
    }
    // Scope untuk filter berdasarkan tag
    public function scopeFilterByTags($query, $tags)
    {
        return $query->where(function ($q) use ($tags) {
            foreach ($tags as $tag) {
                $q->orWhere('tags', 'like', '%' . $tag . '%');
            }
        });
    }

    // Scope untuk filter berdasarkan nutrisi
    public function scopeFilterByNutrition($query, $nutrition)
    {
        foreach ($nutrition as $key => $value) {
            $query->where($key, '<=', $value);  // Contoh: sugar <= 10
        }
        return $query;
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'userID');
    }
    // Scope untuk pencarian berdasarkan nama resep atau nama user
    public function scopeSearch($query, $keyword)
    {
        return $query->where('namaResep', 'like', '%' . $keyword . '%')
                    ->orWhereHas('user', function ($q) use ($keyword) {
                        $q->where('username', 'like', '%' . $keyword . '%');
                    });
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RekomendasiSeeder extends Seeder
{
    public function run()
    {
        // Ambil data dari tabel resep
        $resep = DB::table('resep')->get();

        foreach ($resep as $item) {
            DB::table('rekomendasi')->insert([
                'resepID' => $item->resepID,
                'namaResep' => $item->namaResep,
                'rank' => rand(1, 100),  // Rank random (atau bisa diatur manual)
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now()->addDays(30),
                'fotoResep' => $item->fotoResep,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}

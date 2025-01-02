<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResepTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('resep')->insert([
            [
                'resepID' => 1,
                'userID' => 1,
                'adminID' => 1,
                'namaResep' => 'Smoothie Alpukat',
                'deskripsi' => 'Smoothie sehat dengan alpukat dan madu',
                'fotoResep' => '/images/smoothie_alpukat.jpg',
                'serving' => 2,
                'cookTime' => 10,
                'kategori' => 'Breakfast',
                'bahan' => json_encode([
                    "Alpukat 200 gram",
                    "Madu 20 gram",
                    "Susu almond 100 ml"
                ]),
                'steps' => json_encode([
                    "Blender semua bahan hingga lembut",
                    "Sajikan dengan es batu"
                ]),
                'sugar' => 12.50,
                'fat' => 15.00,
                'carb' => 45.00,
                'protein' => 3.00,
                'kalori' => 250.00,
                'tags' => 'Keto, Low-carb'
            ],
            [
                'resepID' => 2,
                'userID' => 1,
                'adminID' => 1,
                'namaResep' => 'Homemade Burger',
                'deskripsi' => 'Delicious homemade burger with fresh ingredients',
                'fotoResep' => 'images/burger.jpg',
                'serving' => 1,
                'cookTime' => 20,
                'kategori' => 'Lunch',
                'bahan' => 'Beef patty, Lettuce, Tomato, Cheese, Burger bun',
                'steps' => json_encode([
                    "Grill the patty",
                    "Toast the bun",
                    "Assemble with lettuce, tomato, and cheese"
                ]),
                'sugar' => 5.00,
                'fat' => 12.00,
                'carb' => 30.00,
                'protein' => 25.00,
                'kalori' => 350.00,
                'tags' => 'Fast Food, Burger, Lunch'
            ],
            [
                'resepID' => 3,
                'userID' => 2,
                'adminID' => 2,
                'namaResep' => 'Spaghetti Carbonara',
                'deskripsi' => 'Classic spaghetti with creamy carbonara sauce',
                'fotoResep' => 'images/spaghetti.jpg',
                'serving' => 2,
                'cookTime' => 25,
                'kategori' => 'Dinner',
                'bahan' => 'Spaghetti, Eggs, Parmesan, Bacon, Black pepper',
                'steps' => json_encode([
                    "Boil the spaghetti",
                    "Fry bacon until crispy",
                    "Mix spaghetti with sauce and bacon"
                ]),
                'sugar' => 3.50,
                'fat' => 15.00,
                'carb' => 45.00,
                'protein' => 20.00,
                'kalori' => 500.00,
                'tags' => 'Pasta, Italian, Dinner'
            ]
        ]);
    }
}
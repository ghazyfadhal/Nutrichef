<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('admin')->insert([
            [
                'adminID' => 1,
                'username_Admin' => 'admin1',
                'email' => 'admin1@example.com',
                'password' => Hash::make('password123'),  // Gunakan Hash untuk keamanan
            ],
            [
                'adminID' => 2,
                'username_Admin' => 'admin2',
                'email' => 'admin2@example.com',
                'password' => Hash::make('password1234'),  // Password default
            ],
        ]);
    }
}

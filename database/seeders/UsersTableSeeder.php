<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('user')->insert([
            [
                'userID' => 1,
                'username' => 'john_doe',
                'email' => 'john@example.com',
                'password' => Hash::make('password123'), // Hashing password
            ],
            [
                'userID' => 2,
                'username' => 'jane_doe',
                'email' => 'jane@example.com',
                'password' => Hash::make('secret123'),
            ],
            [
                'userID' => 3,
                'username' => 'admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('admin123'),
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'full_name' => 'John Doe',
                'nickname' => 'johnny',
                'email' => 'john.doe@example.com',
                'password' => Hash::make('password123'), // Encripta la contraseña
                'description' => 'Gamer apasionado de los juegos de aventura.',
                'profile_image' => 'https://example.com/profile_images/john_doe.jpg',
                'personal_collection' => json_encode([
                    'xbox_games' => [1, 2], // IDs de videojuegos de Xbox en su colección
                    'ps5_games' => [3, 4]  // IDs de videojuegos de PS5 en su colección
                ]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'full_name' => 'Jane Smith',
                'nickname' => 'jane_gamer',
                'email' => 'jane.smith@example.com',
                'password' => Hash::make('securepass456'), // Encripta la contraseña
                'description' => 'Fanática de los juegos de rol y estrategia.',
                'profile_image' => 'https://example.com/profile_images/jane_smith.jpg',
                'personal_collection' => json_encode([
                    'xbox_games' => [5, 6], // IDs de videojuegos de Xbox en su colección
                    'ps5_games' => [7, 8]  // IDs de videojuegos de PS5 en su colección
                ]),
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}

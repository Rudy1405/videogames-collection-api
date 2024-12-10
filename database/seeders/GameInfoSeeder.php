<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('game_info')->insert([
            // Registros para videojuegos de Xbox
            ['general_rating' => 4.5, 'user_comments' => json_encode([])], // Xbox 1
            ['general_rating' => 4.8, 'user_comments' => json_encode([])], // Xbox 2
            ['general_rating' => 4.3, 'user_comments' => json_encode([])], // Xbox 3
            ['general_rating' => 4.9, 'user_comments' => json_encode([])], // Xbox 4
            ['general_rating' => 4.6, 'user_comments' => json_encode([])], // Xbox 5
            ['general_rating' => 4.7, 'user_comments' => json_encode([])], // Xbox 6
            ['general_rating' => 4.4, 'user_comments' => json_encode([])], // Xbox 7
            ['general_rating' => 4.2, 'user_comments' => json_encode([])], // Xbox 8

            // Registros para videojuegos de PS5
            ['general_rating' => 4.5, 'user_comments' => json_encode([])], // PS5 1
            ['general_rating' => 4.8, 'user_comments' => json_encode([])], // PS5 2
            ['general_rating' => 4.9, 'user_comments' => json_encode([])], // PS5 3
            ['general_rating' => 4.6, 'user_comments' => json_encode([])], // PS5 4
            ['general_rating' => 4.7, 'user_comments' => json_encode([])], // PS5 5
            ['general_rating' => 4.3, 'user_comments' => json_encode([])], // PS5 6
            ['general_rating' => 4.4, 'user_comments' => json_encode([])], // PS5 7
            ['general_rating' => 4.9, 'user_comments' => json_encode([])], // PS5 8
        ]);
    }
}

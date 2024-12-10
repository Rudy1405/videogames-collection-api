<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategoriesSeeder::class,
            GameInfoSeeder::class,
            XboxGamesSeeder::class,
            PS5GamesSeeder::class,
            UsersSeeder::class,
        ]);
    }
}

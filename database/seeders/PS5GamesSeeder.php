<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PS5GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ps5_games')->insert([
            [
                'name' => 'Demon\'s Souls',
                'category_id' => 3, // Acción
                'developer' => 'Bluepoint Games',
                'release_date' => '2020-11-12',
                'description' => 'Una épica remasterización del clásico juego de acción RPG.',
                'image' => 'https://zozila.com/wp-content/uploads/2022/01/512a775edb425a7f5ddc15c3e2fd6d9e.png_525x525q80.png',
                'info_id' => 1
            ],
            [
                'name' => 'Spider-Man: Miles Morales',
                'category_id' => 4, // Aventura
                'developer' => 'Insomniac Games',
                'release_date' => '2020-11-12',
                'description' => 'Una emocionante aventura con el joven héroe Miles Morales.',
                'image' => 'https://zozila.com/wp-content/uploads/2022/01/512a775edb425a7f5ddc15c3e2fd6d9e.png_525x525q80.png',
                'info_id' => 2
            ],
            [
                'name' => 'Ratchet & Clank: Rift Apart',
                'category_id' => 4, // Aventura
                'developer' => 'Insomniac Games',
                'release_date' => '2021-06-11',
                'description' => 'Un divertido juego de plataformas y acción.',
                'image' => 'https://zozila.com/wp-content/uploads/2022/01/512a775edb425a7f5ddc15c3e2fd6d9e.png_525x525q80.png',
                'info_id' => 3
            ],
            [
                'name' => 'Returnal',
                'category_id' => 3, // Acción
                'developer' => 'Housemarque',
                'release_date' => '2021-04-30',
                'description' => 'Un desafiante shooter en tercera persona con bucles temporales.',
                'image' => 'https://zozila.com/wp-content/uploads/2022/01/512a775edb425a7f5ddc15c3e2fd6d9e.png_525x525q80.png',
                'info_id' => 4
            ],
            [
                'name' => 'Horizon Forbidden West',
                'category_id' => 1, // Mundo abierto
                'developer' => 'Guerrilla Games',
                'release_date' => '2022-02-18',
                'description' => 'Una épica aventura en un mundo postapocalíptico.',
                'image' => 'https://zozila.com/wp-content/uploads/2022/01/512a775edb425a7f5ddc15c3e2fd6d9e.png_525x525q80.png',
                'info_id' => 5
            ],
            [
                'name' => 'Gran Turismo 7',
                'category_id' => 5, // Deportes
                'developer' => 'Polyphony Digital',
                'release_date' => '2022-03-04',
                'description' => 'Una experiencia de simulación de carreras de alta calidad.',
                'image' => 'https://zozila.com/wp-content/uploads/2022/01/512a775edb425a7f5ddc15c3e2fd6d9e.png_525x525q80.png',
                'info_id' => 6
            ],
            [
                'name' => 'Ghost of Tsushima: Director\'s Cut',
                'category_id' => 4, // Aventura
                'developer' => 'Sucker Punch Productions',
                'release_date' => '2021-08-20',
                'description' => 'Una expansión del galardonado juego de samuráis.',
                'image' => 'https://zozila.com/wp-content/uploads/2022/01/512a775edb425a7f5ddc15c3e2fd6d9e.png_525x525q80.png',
                'info_id' => 7
            ],
            [
                'name' => 'God of War Ragnarök',
                'category_id' => 3, // Acción
                'developer' => 'Santa Monica Studio',
                'release_date' => '2022-11-09',
                'description' => 'La continuación épica de la saga de Kratos.',
                'image' => 'https://zozila.com/wp-content/uploads/2022/01/512a775edb425a7f5ddc15c3e2fd6d9e.png_525x525q80.png',
                'info_id' => 8
            ],
        ]);
    }
}

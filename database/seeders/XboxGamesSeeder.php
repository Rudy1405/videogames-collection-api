<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class XboxGamesSeeder extends Seeder
{
    public function run()
    {
        DB::table('xbox_games')->insert([
            [
                'name' => 'Halo 5: Guardians',
                'category_id' => 3, // Acción
                'developer' => '343 Industries',
                'release_date' => '2015-10-27',
                'description' => 'Un épico shooter de ciencia ficción desarrollado por 343 Industries.',
                'image' => 'https://cdn.myonlinestore.eu/94250940-6be1-11e9-a722-44a8421b9960/image/cache/full/12cab0c2181e4f25dd291144c3495c40f8e1b755.jpg?20241209085643',
                'info_id' => 1
            ],
            [
                'name' => 'Forza Horizon 4',
                'category_id' => 5, // Deportes
                'developer' => 'Playground Games',
                'release_date' => '2018-10-02',
                'description' => 'Un emocionante juego de carreras de mundo abierto.',
                'image' => 'https://cdn.myonlinestore.eu/94250940-6be1-11e9-a722-44a8421b9960/image/cache/full/12cab0c2181e4f25dd291144c3495c40f8e1b755.jpg?20241209085643',
                'info_id' => 2
            ],
            [
                'name' => 'Gears 5',
                'category_id' => 3, // Acción
                'developer' => 'The Coalition',
                'release_date' => '2019-09-10',
                'description' => 'Un emocionante juego de disparos en tercera persona.',
                'image' => 'https://cdn.myonlinestore.eu/94250940-6be1-11e9-a722-44a8421b9960/image/cache/full/12cab0c2181e4f25dd291144c3495c40f8e1b755.jpg?20241209085643',
                'info_id' => 3
            ],
            [
                'name' => 'Ori and the Blind Forest',
                'category_id' => 4, // Aventura
                'developer' => 'Moon Studios',
                'release_date' => '2015-03-11',
                'description' => 'Un hermoso juego de plataformas de acción y aventura.',
                'image' => 'https://cdn.myonlinestore.eu/94250940-6be1-11e9-a722-44a8421b9960/image/cache/full/12cab0c2181e4f25dd291144c3495c40f8e1b755.jpg?20241209085643',
                'info_id' => 4
            ],
            [
                'name' => 'Sea of Thieves',
                'category_id' => 4, // Aventura
                'developer' => 'Rare',
                'release_date' => '2018-03-20',
                'description' => 'Un multijugador de piratas lleno de aventuras en el mar.',
                'image' => 'https://cdn.myonlinestore.eu/94250940-6be1-11e9-a722-44a8421b9960/image/cache/full/12cab0c2181e4f25dd291144c3495c40f8e1b755.jpg?20241209085643',
                'info_id' => 5
            ],
            [
                'name' => 'Sunset Overdrive',
                'category_id' => 3, // Acción
                'developer' => 'Insomniac Games',
                'release_date' => '2014-10-28',
                'description' => 'Un caótico juego de acción lleno de humor y creatividad.',
                'image' => 'https://cdn.myonlinestore.eu/94250940-6be1-11e9-a722-44a8421b9960/image/cache/full/12cab0c2181e4f25dd291144c3495c40f8e1b755.jpg?20241209085643',
                'info_id' => 6
            ],
            [
                'name' => 'Cuphead',
                'category_id' => 2, // Sandbox
                'developer' => 'Studio MDHR',
                'release_date' => '2017-09-29',
                'description' => 'Un desafiante juego de plataformas y disparos con estilo de animación clásica.',
                'image' => 'https://cdn.myonlinestore.eu/94250940-6be1-11e9-a722-44a8421b9960/image/cache/full/12cab0c2181e4f25dd291144c3495c40f8e1b755.jpg?20241209085643',
                'info_id' => 7
            ],
            [
                'name' => 'State of Decay 2',
                'category_id' => 1, // Mundo abierto
                'developer' => 'Undead Labs',
                'release_date' => '2018-05-22',
                'description' => 'Un juego de supervivencia en un apocalipsis zombi.',
                'image' => 'https://cdn.myonlinestore.eu/94250940-6be1-11e9-a722-44a8421b9960/image/cache/full/12cab0c2181e4f25dd291144c3495c40f8e1b755.jpg?20241209085643',
                'info_id' => 8
            ],
        ]);
    }
}

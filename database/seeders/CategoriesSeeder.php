<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Mundo abierto', 'description' => str_repeat('Lorem ipsum dolor sit amet, consectetur adipiscing elit. ', 3)],
            ['name' => 'Sandbox', 'description' => str_repeat('Suspendisse potenti. Sed vel lacus nec justo feugiat aliquam. ', 3)],
            ['name' => 'Acción', 'description' => str_repeat('Proin dapibus nisi eget eros sagittis, nec varius purus cursus. ', 3)],
            ['name' => 'Aventura', 'description' => str_repeat('Integer aliquam purus sit amet urna feugiat tristique. ', 3)],
            ['name' => 'Deportes', 'description' => str_repeat('Nunc at massa a lectus accumsan tincidunt nec nec turpis. ', 3)],
            ['name' => 'Otros', 'description' => str_repeat('Vivamus congue metus in metus dictum, quis hendrerit sapien. ', 3)],
        ]);
    }
}



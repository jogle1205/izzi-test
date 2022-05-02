<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categoria')->insert([
            ['nombre' => 'Electrónica'],
            ['nombre' => 'Línea'],
            ['nombre' => 'Deportes'],
            ['nombre' => 'Alimentos'],
            ['nombre' => 'Jardín'],
        ]);

    }
}

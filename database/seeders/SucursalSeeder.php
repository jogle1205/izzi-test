<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SucursalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         //
        DB::table('sucursal')->insert([
            ['nombre' => 'Cuernavaca'],
            ['nombre' => 'Yautepec'],
            ['nombre' => 'Cuautla'],
            ['nombre' => 'Acapulco']
        ]);
    }
}

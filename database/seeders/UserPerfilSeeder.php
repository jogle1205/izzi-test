<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserPerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('user_perfil')->insert([
            [
                'nombre' => 'administrador',
                'descripcion' => 'Administrador general',
            ],
            [
                'nombre' => 'capturista',
                'descripcion' => 'Capturista',
            ],
        ]);

    }
}

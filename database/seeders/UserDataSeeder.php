<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('user_data')->insert([
            [
                'id' => 1,
                'nombre' => 'José',
                'apellido_paterno' => 'González',
                'apellido_materno' => 'Salgado',
                'acceso' => 1,
                'perfil_id' => 1,
            ],
            [
                'id' => 2,
                'nombre' => 'Carlos',
                'apellido_paterno' => 'Alberto',
                'apellido_materno' => 'Hernandez',
                'acceso' => 1,
                'perfil_id' => 2,
            ],
        ]);
    }
}

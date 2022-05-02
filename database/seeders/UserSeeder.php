<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Jose Gonzalez',
                'email' => 'jogle05@gmail.com',
                'password' => '$2y$10$FVKcuHuxphBNdpqWceAmDeHKbrjU3hGD7e6PS1NruMA1L7MJ8pDcC',
                'remember_token' => 'yml6LQfzeiwj80k0TfgSM8gNku5tojwUWPOCDx6NxIDQxn8POjb7Z8xQGfe7',
            ],
            [
                'id' => 2,
                'name' => 'Carlos',
                'email' => 'jogle06@gmail.com',
                'password' => '$2y$10$FVKcuHuxphBNdpqWceAmDeHKbrjU3hGD7e6PS1NruMA1L7MJ8pDcC',
                'remember_token' => 'yml6LQfzeiwj80k0TfgSM8gNku5tojwUWPOCDx6NxIDQxn8POjb7Z8xQGfe7',
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeed extends Seeder
{

    public function run(): void
    {
        DB::table('users')->insert([
            'Nombre' => 'Jhonatan Ortiz',
            'usuario' => 'Dante27',
            'email' => 'jhonatanagosto1@hotmail.com',
            'password' => bcrypt(123456789),
            'observaciones' => 'N/A',
        ]);

    }
}

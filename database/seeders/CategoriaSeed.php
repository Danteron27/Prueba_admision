<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriaSeed extends Seeder
{

    public function run(): void
    {
        DB::table('categorias')->insert([
            'Nombre' => 'terror',
            'Codigo' => '0001',
            'Descripcion' => 'Peliculas de terror',
        ]);

        DB::table('categorias')->insert([
            'Nombre' => 'Misterio',
            'Codigo' => '0002',
            'Descripcion' => 'Peliculas de misterio',
        ]);

        DB::table('categorias')->insert([
            'Nombre' => 'Comedia',
            'Codigo' => '0003',
            'Descripcion' => 'Peliculas de comedia',
        ]);

        DB::table('categorias')->insert([
            'Nombre' => 'Accion',
            'Codigo' => '0004',
            'Descripcion' => 'Peliculas de Accion',
        ]);

        DB::table('categorias')->insert([
            'Nombre' => 'Documentales',
            'Codigo' => '0005',
            'Descripcion' => 'Documentales de historia',
        ]);
    }
}

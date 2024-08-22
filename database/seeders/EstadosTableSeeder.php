<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadosTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('estados')->insert([
            ['nombre_estado' => 'activo'],
            ['nombre_estado' => 'inactivo']
        ]);
    }
}

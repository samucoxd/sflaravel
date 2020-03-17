<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FalloTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fallos')->insert([
            'idfallo' => 1,
            'nombre' => 'Faltante'
            ]);
        DB::table('fallos')->insert([
            'idfallo' => 2,
            'nombre' => 'Sobrante'
            ]);
        DB::table('fallos')->insert([
            'idfallo' => 3,
            'nombre' => 'Cruce'
            ]);
    }
}

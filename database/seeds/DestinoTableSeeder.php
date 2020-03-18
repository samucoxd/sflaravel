<?php

use Carbon\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
        DB::table('destinos')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la revisión de claves foráneas
        Factory(App\Destino::class, 10)->create();
    }
}

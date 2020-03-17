<?php

use Carbon\Factory;
use Illuminate\Database\Seeder;

class DestinoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(App\Destino::class, 10)->create();
    }
}

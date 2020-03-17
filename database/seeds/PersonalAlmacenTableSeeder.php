<?php

use Carbon\Factory;
use Illuminate\Database\Seeder;

class PersonalAlmacenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(App\Personalalmacen::class, 10)->create();
    }
}

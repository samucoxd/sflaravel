<?php

use Carbon\Factory;
use Illuminate\Database\Seeder;

class DespachadorTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(App\Despachador::class, 10)->create();
    }
}

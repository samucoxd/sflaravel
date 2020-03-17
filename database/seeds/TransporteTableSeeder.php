<?php

use Illuminate\Database\Seeder;

class TransporteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Transporte::class, 10)->create();
    }
}

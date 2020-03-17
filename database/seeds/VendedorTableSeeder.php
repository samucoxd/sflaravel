<?php

use Illuminate\Database\Seeder;

class VendedorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Vendedor::class, 10)->create();
    }
}

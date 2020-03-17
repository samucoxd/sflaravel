<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            FalloTableSeeder::class,
            UserTableseeder::class,
            VendedorTableSeeder::class,
            TransporteTableSeeder::class,
            DestinoTableSeeder::class,
            ClienteTableSeeder::class,
            PersonalAlmacenTableSeeder::class,
            ]);
        // $this->call(UsersTableSeeder::class);
    }
}

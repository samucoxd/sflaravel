<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 20)->create();
        DB::table('users')->insert([
            'name'      =>  'Samuel',
            'email'     =>  'boliviadd@gmail.com',
            'password'  =>  bcrypt('12345678'),
            'remember_token' => Str::random(10),
            ]);
    }
}

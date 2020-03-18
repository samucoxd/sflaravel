<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pedido;
use Faker\Generator as Faker;

$factory->define(Pedido::class, function (Faker $faker){
    static $increment = 10000;
    return [
        'idnota'    =>  $increment++,
        'idfac'     =>  $faker->unique()->numberBetween(10000,99999),
        'fecha'     =>  $faker->date(),
        'cliente'   =>  $faker->unique()->numberBetween(1, App\Cliente::count()),
        'vendedor'  =>  $faker->unique()->numberBetween(1, App\Vendedor::count()),
    ];
});

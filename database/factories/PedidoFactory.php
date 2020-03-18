<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pedido;
use Faker\Generator as Faker;

$factory->define(Pedido::class, function (Faker $faker){
    static $increment = 10000;
    static $increment2 = 0;
    return [
        'idnota'    =>  $increment++,
        'idfac'     =>  $faker->unique()->numberBetween(10000,99999),
        'fecha'     =>  $faker->date(),
        'cliente'   =>  $increment2++,
        'vendedor'  =>  $increment2,
    ];
});

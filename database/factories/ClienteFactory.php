<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cliente;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Cliente::class, function (Faker $faker) {
    static $increment = 0;
    return [
        'idcliente' =>  $increment++,
        'nombre'    =>  $faker->firstName(),
        'zona'      =>  $faker->firstName(),
    ];
});

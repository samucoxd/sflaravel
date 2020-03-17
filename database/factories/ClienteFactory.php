<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cliente;
use Faker\Generator as Faker;

$factory->define(Cliente::class, function (Faker $faker) {
    $nombre = $faker->name;
    return [
        'idcliente' =>  $faker->unique()->numberBetween(1,100),
        'nombre'    =>  $nombre,
        'zona'      =>  $faker->country,
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Destino;
use Faker\Generator as Faker;

$factory->define(Destino::class, function (Faker $faker) {
    $nombre = $faker->name;
    return [
        'iddestino' =>  $faker->unique()->numberBetween(1,30),
        'nombre'    =>  $nombre,
        'ciudad'    =>  $faker->country,
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Destino;
use Faker\Generator as Faker;

$factory->define(Destino::class, function (Faker $faker) {
    $nombre = $faker->name;
    return [
        'iddestino' =>  $faker->unique()->biasedNumberBetween(1,10),
        'nombre'    =>  $nombre,
        'ciudad'    =>  $faker->country,
    ];
});

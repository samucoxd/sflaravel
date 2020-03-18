<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Transporte;
use Faker\Generator as Faker;

$factory->define(Transporte::class, function (Faker $faker) {
    $nombre = $faker->name;
    return [
        'idtransporte'    => $faker->unique()->biasedNumberBetween(1,10),
        'nombre'        => $nombre,
    ];
});

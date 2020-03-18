<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Personalalmacen;
use Faker\Generator as Faker;

$factory->define(Personalalmacen::class, function (Faker $faker) {
    $nombre = $faker->name;
    return [
        'nombre'            =>  $nombre,
    ];
});

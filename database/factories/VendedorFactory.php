<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Vendedor;
use Faker\Generator as Faker;

$factory->define(Vendedor::class, function (Faker $faker) {
    $nombre = $faker->name;
    return [
        'idvendedor'    => $faker->unique()->numberBetween(1,30),
        'nombre'        => $nombre,
    ];
});

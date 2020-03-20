<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Despachador;
use App\Destino;
use Faker\Generator as Faker;

$factory->define(Despachador::class, function (Faker $faker) {
    return [
        'nombre'    =>  $faker->firstName(),
    ];
});

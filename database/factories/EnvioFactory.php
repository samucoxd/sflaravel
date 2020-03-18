<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Envios;
use Faker\Generator as Faker;

$factory->define(Envios::class, function (Faker $faker) {
    static $increment = 10000;
    return [
        'fecha'         =>  $faker->date(),
        'hora'          =>  $faker->time(),
        'idtransporte'  =>  $faker->unique()->numberBetween(1, App\Transporte::count()),
        'iddestino'     =>  $faker->unique()->numberBetween(1, App\Destino::count()),
        'guia'          =>  strtoupper($faker->lexify('?????')),
        'idpedido'      =>  $increment++,
    ];
});

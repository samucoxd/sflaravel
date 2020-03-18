<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Envios;
use Faker\Generator as Faker;

$factory->define(Envios::class, function (Faker $faker) {
    static $increment = 10000;
    static $increment2 = 1;
    return [
        'fecha'         =>  $faker->date(),
        'hora'          =>  $faker->time(),
        'idtransporte'  =>  $increment2++,
        'iddestino'     =>  $increment2++,
        'guia'          =>  strtoupper($faker->lexify('?????')),
        'idpedido'      =>  $increment++,
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cliente;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Cliente::class, function (Faker $faker) {
    static $increment = 0;
    $nombre = $faker->name;
    return [
        'idcliente' =>  $increment++,
        'nombre'    =>  $nombre,
        'zona'      =>  $faker->country,
    ];
});

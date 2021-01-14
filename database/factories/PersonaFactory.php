<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Persona;
use Faker\Generator as Faker;

$factory->define(Persona::class, function (Faker $faker) {
    return [
        'ci' => (string) $faker->unique()->numberBetween(10000, 99999),
        'nombre' => $faker->firstName,
        'ap_paterno' => $faker->lastName,
        'ap_materno' => $faker->lastName,
        'celular' => $faker->unique()->randomNumber(),
        'direccion' => $faker->streetName,
        'numero_domicilio' => $faker->optional()->buildingNumber,
    ];
});

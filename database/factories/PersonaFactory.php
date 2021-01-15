<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Persona;
use Faker\Generator as Faker;

$factory->define(Persona::class, function (Faker $faker) {
    return [
        'ci' => (string) $faker->unique()->numberBetween(100000, 99999999),
        'nombre' => $faker->firstName,
        'ap_paterno' => $faker->lastName,
        'ap_materno' => $faker->lastName,
        'sexo'=> $faker->randomElement($array = array ('hombre','mujer')),
        'fecha_nacimiento' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'celular' => (string) $faker->unique()->numberBetween(60000000, 79999999),    //randomNumber(),
        'direccion' => $faker->streetName,
        'numero_domicilio' => $faker->optional()->buildingNumber,
        'foto'=> $faker->unique()->imageUrl($width = 640, $height = 480)
    ];
});

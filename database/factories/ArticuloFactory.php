<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Articulo;
use Faker\Generator as Faker;

$factory->define(Articulo::class, function (Faker $faker) {
    return [
        'nombre' => $faker->unique()->word,
        'descripcion' => $faker->text($maxNbChars = 20),
        'precio' => $faker->randomElement($array = array(7.00, 17.00, 23.00, 28.00, 34.00, 40.00, 44.00, 22.00)),  //randomFloat($nbMaxDecimals = 2, $min = 7, $max = 44)      // (double) $faker->numberBetween($min = 7, $max = 44),  //,  // 48.89
        'cantidad' => $faker->randomNumber($nbDigits = 2, $strict = false), //numberBetween($min = 1000, $max = 9000) // 8567
        'imagen' => $faker->imageUrl($width = 640, $height = 480),
        'estado' => 1,
    ];
});

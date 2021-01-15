<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cajero;
use Faker\Generator as Faker;

$factory->define(Cajero::class, function (Faker $faker) {
    return [
        'turno'=> $faker->randomElement($array = array ('mañana','tarde')),
    ];
});

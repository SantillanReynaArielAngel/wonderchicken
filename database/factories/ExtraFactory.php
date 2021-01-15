<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Extra;
use Faker\Generator as Faker;

$factory->define(Extra::class, function (Faker $faker) {
    return [
        'tipo'=> $faker->randomElement($array = array ('fritura','cereal')),
    ];
});

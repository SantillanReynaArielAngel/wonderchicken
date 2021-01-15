<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Plato;
use Faker\Generator as Faker;

$factory->define(Plato::class, function (Faker $faker) {
    return [
        'categoria'=>$faker->optional()->randomElement($array = array ('broaster')),
        // 'categoria'=>'Broaster'->optional(),
    ];
});

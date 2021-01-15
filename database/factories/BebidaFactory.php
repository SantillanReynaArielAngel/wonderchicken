<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bebida;
use Faker\Generator as Faker;

$factory->define(Bebida::class, function (Faker $faker) {
    return [
        'sabor'=>$faker->randomElement($array = array ('Cola','Papaya','Manzana','Durazno','Pera','Limon')),
        //$table->string('sabor')->unique();
    ];
});

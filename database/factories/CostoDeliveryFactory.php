<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CostoDelivery;
use Faker\Generator as Faker;

$factory->define(CostoDelivery::class, function (Faker $faker) {
    return [
            'empresa'=> $faker->unique()->randomElement($array = array ('DeUna','MotoGo')),
            'zona'=> $faker->streetName,
            'km' => $faker->unique()->numberBetween(1,30),
            'precio'=> $faker->randomElement($array = array (5.00,8.00,10.00,12.00,15.00,20.00)),
    ];
});

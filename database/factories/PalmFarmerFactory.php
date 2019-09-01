<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PalmFarmer;
use Faker\Generator as Faker;

$factory->define(PalmFarmer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'rfc' => 'RFCPALMFARMER'
    ];
});

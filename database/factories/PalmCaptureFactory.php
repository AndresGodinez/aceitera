<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PalmCapture;
use Faker\Generator as Faker;

$factory->define(PalmCapture::class, function (Faker $faker) {
    return [
        'tons' => $faker->numberBetween(1,20)
    ];
});

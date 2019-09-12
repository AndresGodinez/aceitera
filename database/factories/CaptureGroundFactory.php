<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CaptureGround;
use Faker\Generator as Faker;

$factory->define(CaptureGround::class, function (Faker $faker) {
    return [
        'tons' => $faker->numberBetween(1, 50)
    ];
});

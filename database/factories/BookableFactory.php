<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bookable;
use Faker\Generator as Faker;

$factory->define(Bookable::class, function (Faker $faker) {
    return [
        'title' => $faker->city,
        'description' => $faker->text()
    ];
});

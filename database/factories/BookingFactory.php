<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Booking;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Booking::class, function (Faker $faker) {
    $from = Carbon::instance($faker->dateTimeBetween('-1 months', '+1 months'));
    $to = (clone $from)->addDays(random_int(1, 14));

    return [
       'from' => $from,
       'to' => $to,
       'bookable_id' => random_int(1, 50)
    ];
});

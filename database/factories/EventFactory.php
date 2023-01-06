<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'name'             => $faker->sentence(),
        'slug'             => $faker->sentence(),
        'description'      => $faker->text(),
        'address'          => $faker->address,
        'image'            => $faker->imageUrl(),
        'ticket_price'     => $faker->numberBetween(200, 1000),
        'ticket_remaining' => $faker->numberBetween(1, 10),
        'date'             => $faker->date(),
    ];
});

<?php

use Faker\Generator as Faker;

$factory->define(gaya\Artist::class, function (Faker $faker) {
    return [
        'user_id' => rand(1, config('seeding.numbers.default')),
        'name' => $faker->name,
    ];
});

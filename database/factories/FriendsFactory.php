<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Friend::class, function (Faker $faker) {
    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'birthdate' => $faker->date(),
        'priority' => $faker->numberBetween(1,3),
        'email' => $faker->safeEmail,
    ];
});

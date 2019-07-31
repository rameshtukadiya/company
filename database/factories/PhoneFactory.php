<?php

use App\User;
use App\Phone;
use Faker\Generator as Faker;

$factory->define(Phone::class, function (Faker $faker) {
    return [
        'number' => $faker->phoneNumber,
        'user_id' => function () {
            return factory(User::class)->create()->id;
        }
    ];
});

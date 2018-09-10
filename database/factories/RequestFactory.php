<?php

use Faker\Generator as Faker;
use App\Models\Request as Request;
use App\Models\User as User;

$factory->define(Request::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            if (User::count() < 1) {
                return factory(User::class)->create()->id;
            } else {
                return User::inRandomOrder()->first()->id;
            }
        },
        'lat' => $faker->randomDigit,
        'lang' => $faker->randomDigit,
        'size' => $faker->randomDigit,
        'images' => $faker->image,
        'address' => $faker->address,
    ];
});

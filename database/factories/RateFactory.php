<?php

use Faker\Generator as Faker;
use App\Models\Rate as Rate;

$factory->define(Rate::class, function (Faker $faker) {
    return [
        'user_id' => '',
        'product_id' => '',
        'rate' => $faker->randomDigit,
        'comment' => $faker->text,
    ];
});

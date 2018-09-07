<?php

use Faker\Generator as Faker;
use App\Models\City as City;

$factory->define(City::class, function (Faker $faker) {
    return [
        "name" => $faker->city,
        "country_id" => 1,
    ];
});

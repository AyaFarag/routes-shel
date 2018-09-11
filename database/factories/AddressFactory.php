<?php

use Faker\Generator as Faker;
use App\Models\Address as Address;
use App\Models\User as User;
use App\Models\Country as Country;
use App\Models\City as City;

$factory->define(Address::class, function (Faker $faker) {
    return [
        "address" => $faker->address,
        "user_id" => function () {
            if (User::count() < 1) {
                return factory(User::class)->create()->id;
            } else {
                return User::inRandomOrder()->first()->id;
            }
        },
        "country_id" => function () {
            if (Country::count() < 1) {
                return factory(Country::class)->create()->id;
            } else {
                return Country::inRandomOrder()->first()->id;
            }
        },
        "city_id" => function () {
            if (City::count() < 1) {
                return factory(City::class)->create()->id;
            } else {
                return City::inRandomOrder()->first()->id;
            }
        },
    ];
});

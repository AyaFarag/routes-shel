<?php

use Faker\Generator as Faker;
use App\Models\Payment AS Payment;

$factory->define(Payment::class, function (Faker $faker) {
    return [
        "title" => $faker->title ,
        
    ];
});

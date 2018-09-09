<?php

use Faker\Generator as Faker;
use App\Models\Order as Order;
use App\Models\User as User;
use App\Models\Address as Address;
use App\Models\Payment as Payment;

$factory->define(Order::class, function (Faker $faker) {
    return [
        "user_id" => function () {
            if (User::count() < 1) {
                return factory(User::class)->create()->id;
            } else {
                return User::inRandomOrder()->first()->id;
            }
        },
        "address_id" => function () {
            if (Address::count() < 1) {
                return factory(Address::class)->create()->id;
            } else {
                return Address::inRandomOrder()->first()->id;
            }
        },
        "payment_id" => function () {
            if (Payment::count() < 1) {
                return factory(Payment::class)->create()->id;
            } else {
                return Payment::inRandomOrder()->first()->id;
            }
        },
        "shipping_cost" => $faker->randomDigit,
        
    ];
});

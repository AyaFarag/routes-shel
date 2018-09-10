<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this -> call([
            AdminsTableSeeder::class,
            UserSeeder::class,
            SettingsTableSeeder::class,
            CountrySeeder::class,
            CitySeeder::class,
            CategorySeeder::class,
            PagesSeeder::class,
            ProductSeeder::class,
            OfferSeeder::class,
            AddressSeeder::class,
            PaymentSeeder::class,
            OrderSeeder::class,
            RateSeeder::class,
            RequestSeeder::class,
            ServiceSeeder::class,
            Request_ServiceSeeder::class,
            Order_ProductSeeder::class,
        ]);
     
    }
}

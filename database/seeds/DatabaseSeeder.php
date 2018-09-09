<?php

use Illuminate\Database\Seeder;

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
        ]);
     
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Models\Request as Request;
use App\Models\Service as Service;

class Request_ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Request::class)->create([
            'request_id' => function () {
                if (Request::count() < 1) {
                    return factory(Request::class)->create()->id;
                } else {
                    return Request::inRandomOrder()->first()->id;
                }
            },
            ]);

            factory(App\Models\Service::class)->create([
                'service_id' => function () {
                    if (Service::count() < 1) {
                        return factory(Service::class)->create()->id;
                    } else {
                        return Service::inRandomOrder()->first()->id;
                    }
                },
            ]);
    }
}

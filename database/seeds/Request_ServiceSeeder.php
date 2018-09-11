<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('request_service')->insert([
            'request_id' => 1,
            'service_id' => 1,
        ]);
    }
}

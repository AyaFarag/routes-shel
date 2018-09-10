<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Order as Order;
use App\Models\Product as Product;

class Order_ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('order__product')->insert([
                'order_id' => 1,
                'product_id' => 1,
                'quantity' => 50,
                'price' => 1000,
            ]);

    }
}

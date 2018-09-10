<?php

use Illuminate\Database\Seeder;
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
            DB::table('order__products')->insert([
                'order_id' => function () {
                    if (Order::count() < 1) {
                        return factory(Order::class)->create()->id;
                    } else {
                        return Order::inRandomOrder()->first()->id;
                    }
                },
                'product_id' => function () {
                    if (Product::count() < 1) {
                        return factory(Product::class)->create()->id;
                    } else {
                        return Product::inRandomOrder()->first()->id;
                    }
                },
                'quantity' => 50,
                'price' => 1000,
            ]);

    }
}

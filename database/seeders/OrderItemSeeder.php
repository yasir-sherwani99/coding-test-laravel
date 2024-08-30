<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('order_items')->insert([
            [
                'order_id' => 1,
                'product_id' => 9,
                'price' => 99,
                'qty' => 1,
                'total' => 99
            ],
            [
                'order_id' => 2,
                'product_id' => 2,
                'price' => 9,
                'qty' => 5,
                'total' => 45
            ],
            [
                'order_id' => 2,
                'product_id' => 5,
                'price' => 69,
                'qty' => 1,
                'total' => 69
            ],
            [
                'order_id' => 3,
                'product_id' => 2,
                'price' => 9,
                'qty' => 2,
                'total' => 18
            ],
            [
                'order_id' => 4,
                'product_id' => 7,
                'price' => 20,
                'qty' => 1,
                'total' => 20
            ],
            [
                'order_id' => 5,
                'product_id' => 6,
                'price' => 120,
                'qty' => 1,
                'total' => 120
            ],
            [
                'order_id' => 6,
                'product_id' => 8,
                'price' => 39,
                'qty' => 1,
                'total' => 39
            ],
            [
                'order_id' => 7,
                'product_id' => 9,
                'price' => 99,
                'qty' => 4,
                'total' => 396
            ],
            [
                'order_id' => 8,
                'product_id' => 3,
                'price' => 39,
                'qty' => 1,
                'total' => 39
            ],
            [
                'order_id' => 9,
                'product_id' => 1,
                'price' => 49,
                'qty' => 1,
                'total' => 49
            ],
            [
                'order_id' => 10,
                'product_id' => 2,
                'price' => 9,
                'qty' => 4,
                'total' => 36
            ],
        ]);
    }
}

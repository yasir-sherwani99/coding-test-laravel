<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert([
            [
                'id' => 1,
                'invoice' => rand(10000, 99999),
                'customer_id' => 2,
                'subtotal' => 99,
                'qty' => 1,
                'shipping_charges' => 3,
                'tax' => 5,
                'discount' => 0,
                'grandtotal' => 107,
                'shipping_status' => 'pending',
                'payment_status' => 'paid'
            ],
            [
                'id' => 2,
                'invoice' => rand(10000, 99999),
                'customer_id' => 5,
                'subtotal' => 114,
                'qty' => 5,
                'shipping_charges' => 3,
                'tax' => 7.5,
                'discount' => 0,
                'grandtotal' => 124.5,
                'shipping_status' => 'pending',
                'payment_status' => 'paid'
            ],
            [
                'id' => 3,
                'invoice' => rand(10000, 99999),
                'customer_id' => 7,
                'subtotal' => 18,
                'qty' => 2,
                'shipping_charges' => 3,
                'tax' => 5,
                'discount' => 0,
                'grandtotal' => 28,
                'shipping_status' => 'pending',
                'payment_status' => 'paid'
            ],
            [
                'id' => 4,
                'invoice' => rand(10000, 99999),
                'customer_id' => 8,
                'subtotal' => 20,
                'qty' => 1,
                'shipping_charges' => 3,
                'tax' => 5,
                'discount' => 5,
                'grandtotal' => 23,
                'shipping_status' => 'pending',
                'payment_status' => 'paid'
            ],
            [
                'id' => 5,
                'invoice' => rand(10000, 99999),
                'customer_id' => 25,
                'subtotal' => 120,
                'qty' => 1,
                'shipping_charges' => 8,
                'tax' => 15,
                'discount' => 0,
                'grandtotal' => 143,
                'shipping_status' => 'pending',
                'payment_status' => 'paid'
            ],
            [
                'id' => 6,
                'invoice' => rand(10000, 99999),
                'customer_id' => 27,
                'subtotal' => 39,
                'qty' => 1,
                'shipping_charges' => 3,
                'tax' => 5,
                'discount' => 0,
                'grandtotal' => 47,
                'shipping_status' => 'pending',
                'payment_status' => 'paid'
            ],
            [
                'id' => 7,
                'invoice' => rand(10000, 99999),
                'customer_id' => 88,
                'subtotal' => 396,
                'qty' => 4,
                'shipping_charges' => 25,
                'tax' => 26,
                'discount' => 0,
                'grandtotal' => 447,
                'shipping_status' => 'shipped',
                'payment_status' => 'paid'
            ],
            [
                'id' => 8,
                'invoice' => rand(10000, 99999),
                'customer_id' => 9,
                'subtotal' => 39,
                'qty' => 1,
                'shipping_charges' => 8,
                'tax' => 5,
                'discount' => 0,
                'grandtotal' => 50,
                'shipping_status' => 'canceled',
                'payment_status' => 'canceled'
            ],
            [
                'id' => 9,
                'invoice' => rand(10000, 99999),
                'customer_id' => 12,
                'subtotal' => 49,
                'qty' => 1,
                'shipping_charges' => 7,
                'tax' => 12,
                'discount' => 0,
                'grandtotal' => 68,
                'shipping_status' => 'pending',
                'payment_status' => 'paid'
            ],
            [
                'id' => 10,
                'invoice' => rand(10000, 99999),
                'customer_id' => 18,
                'subtotal' => 36,
                'qty' => 4,
                'shipping_charges' => 3,
                'tax' => 5,
                'discount' => 0,
                'grandtotal' => 44,
                'shipping_status' => 'pending',
                'payment_status' => 'paid'
            ],
        ]);

    }
}

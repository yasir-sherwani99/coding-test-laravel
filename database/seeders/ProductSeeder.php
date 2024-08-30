<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = array(
            array(
                'name' => 'Fever Gun',
                'price' => 49,
                'description' => null,
                'qty' => 150,
                'brand' => null,
                'image' => null
            ),
            array(
                'name' => 'N95 Mask',
                'price' => 9,
                'description' => null,
                'qty' => 1000,
                'brand' => null,
                'image' => null
            ),
            array(
                'name' => 'Imported VR Box',
                'price' => 39,
                'description' => null,
                'qty' => 50,
                'brand' => null,
                'image' => null
            ),
            array(
                'name' => 'New Colorfull Shoes',
                'price' => 99,
                'description' => null,
                'qty' => 10,
                'brand' => null,
                'image' => null
            ),
            array(
                'name' => 'Hand Bag',
                'price' => 69,
                'description' => null,
                'qty' => 20,
                'brand' => null,
                'image' => null
            ),
            array(
                'name' => 'White Table Camera',
                'price' => 120,
                'description' => null,
                'qty' => 100,
                'brand' => null,
                'image' => null
            ),
            array(
                'name' => 'Unique Blue Bag',
                'price' => 20,
                'description' => null,
                'qty' => 150,
                'brand' => null,
                'image' => null
            ),
            array(
                'name' => 'Apple Watch',
                'price' => 39,
                'description' => null,
                'qty' => 10,
                'brand' => null,
                'image' => null
            ),
            array(
                'name' => 'Morden Chair',
                'price' => 99,
                'description' => null,
                'qty' => 10,
                'brand' => null,
                'image' => null
            ),
            array(
                'name' => 'Cosco Vollyboll',
                'price' => 49,
                'description' => null,
                'qty' => 10,
                'brand' => null,
                'image' => null
            ),
        );

        if(count($products) > 0) {
            foreach($products as $product) {
                Product::updateOrCreate([
                    'name' => $product['name']
                ],[
                    'price' => $product['price'],
                    'description' => $product['description'],
                    'qty' => $product['qty'],
                    'brand' => $product['brand'],
                    'image' => $product['image'],
                ]);
            }
        }
    }
}

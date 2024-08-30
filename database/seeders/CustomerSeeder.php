<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Customer;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for($i = 0; $i < 100; $i++) {
            $customer = new Customer();

            $customer->first_name = $faker->firstName;
            $customer->last_name = $faker->lastName;
            $customer->email = $faker->email;
            $customer->address = $faker->address;
            $customer->city = $faker->city;
            $customer->state = $faker->state;
            $customer->country = $faker->country;

            $customer->save();
        }
    }
}

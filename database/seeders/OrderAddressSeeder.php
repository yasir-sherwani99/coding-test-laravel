<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use App\Models\OrderAddress as ModelsOrderAddress;

class OrderAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for($i = 1; $i <= 10; $i++) {
            $order = new ModelsOrderAddress();

            $order->order_id = $i;
            $order->first_name = $faker->firstName;
            $order->last_name = $faker->lastName;
            $order->email = $faker->email;
            $order->address = $faker->address;
            $order->city = $faker->city;
            $order->state = $faker->state;
            $order->country = $faker->country;
            $order->phone = $faker->phoneNumber;

            $order->save();
        }

        // DB::table('order_addresses')->insert([
        //     [
        //         'order_id' => 1,
        //         'first_name' => 'Austin',
        //         'last_name' => 'Rutherford',
        //         'email' => 'marisol06@schultz.com',
        //         'address' => '99735 Oberbrunner Mill Apt. 493 North Marjorie, DE 32658',
        //         'city' => 'Nienowshire',
        //         'state' => 'Tennessee',
        //         'country' => 'Malawi',
        //         'phone' => '+3432328924'
        //     ],
        //     [
        //         'order_id' => 2,
        //         'first_name' => 'Alexys',
        //         'last_name' => 'Hyatt',
        //         'email' => 'vanessa77@renner.com',
        //         'address' => '93373 Stamm Fork Port Tressamouth, NH 11658-9156',
        //         'city' => 'New Sister',
        //         'state' => 'Pennsylvania',
        //         'country' => 'Albania',
        //         'phone' => '+3432328924'
        //     ],
        //     [
        //         'order_id' => 3,
        //         'first_name' => 'Judge',
        //         'last_name' => 'Bernier',
        //         'email' => 'javier.batz@dibbert.org',
        //         'address' => '68501 Jerrell Drives Runolfssonton, WV 69295',
        //         'city' => 'Emardberg',
        //         'state' => 'Pennsylvania',
        //         'country' => 'Saint Helena',
        //         'phone' => '+3432328924'
        //     ],
        //     [
        //         'order_id' => 4,
        //         'first_name' => 'Graham',
        //         'last_name' => 'Adams',
        //         'email' => 'alberta.wehner@hotmail.com',
        //         'address' => '3919 Jasper Spur Apt. 906 Port Ward, NM 29171',
        //         'city' => 'Port Rose',
        //         'state' => 'Kentucky',
        //         'country' => 'Tonga',
        //         'phone' => '+3432328924'
        //     ],
        //     [
        //         'order_id' => 5,
        //         'first_name' => 'Nina',
        //         'last_name' => 'Crist',
        //         'email' => 'koberbrunner@yahoo.com',
        //         'address' => '18819 Amie Shores Suite 227 Borershire, ME 79481',
        //         'city' => 'East Savanah',
        //         'state' => 'Arizona',
        //         'country' => 'Liechtenstein',
        //         'phone' => '+3432328924'
        //     ],
        // ]);
    }
}

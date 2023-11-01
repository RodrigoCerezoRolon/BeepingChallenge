<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i=0; $i < 20; $i++) { 
            Order::create([
                'order_ref' => $faker->word(),
                'customer_name' => $faker->name(),
            ]);
        }
    }
}

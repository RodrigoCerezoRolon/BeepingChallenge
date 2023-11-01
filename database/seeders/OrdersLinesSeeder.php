<?php

namespace Database\Seeders;

use App\Models\OrdersLines;
use Illuminate\Database\Seeder;

class OrdersLinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 20; $i++) { 
            $product_id = ($i % 10) + 1;
            OrdersLines::create([
                'order_id' => $i+1,
                'qty' => rand(1,100),
                'product_id' => $product_id
            ]);
        }
    }
}

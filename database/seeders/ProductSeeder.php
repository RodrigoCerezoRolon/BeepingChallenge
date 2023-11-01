<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $productNames = [
            "Refrigerator",
            "Washing Machine",
            "Dishwasher",
            "Microwave Oven",
            "Coffee Maker",
            "Toaster",
            "Blender",
            "Vacuum Cleaner",
            "Iron",
            "Kettle",
            "Air Purifier",
            "Ceiling Fan",
            "Oven",
            "Television",
            "Vacuum Flask",
            "Food Processor",
            "Rice Cooker",
            "Sewing Machine",
            "Hair Dryer",
            "Alarm Clock",
        ];
        
        for ($i=0; $i < 10; $i++) { 
            Product::create([
                'name' => $productNames[$i],
                'cost' => rand(100, 10000) / 100
            ]);
        }
    }
}

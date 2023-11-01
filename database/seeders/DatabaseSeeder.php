<?php

namespace Database\Seeders;

use App\Models\OrderLine;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // ProductSeeder::class,
            // OrderSeeder::class,
            OrdersLinesSeeder::class,
        ]);
    }
}

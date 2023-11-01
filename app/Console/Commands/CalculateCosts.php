<?php

namespace App\Console\Commands;

use App\Jobs\CalculateCostsJob;
use Illuminate\Console\Command;

class CalculateCosts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'calculate-costs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Calculate the total cost of all orders';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info("Calculating total cost...");
        CalculateCostsJob::dispatch();
      
    }
}

<?php

namespace App\Jobs;

use App\Models\OrdersLines;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CalculateCostsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $orders_lines = OrdersLines::all();
        $total_cost = 0;
        foreach ($orders_lines as $order_line) {
            $total_cost += $order_line->qty * $order_line->product->cost;
        }
        $message = "Total cost is ".number_format($total_cost, 2);
        
        fwrite(STDOUT, $message.PHP_EOL);
    }
}

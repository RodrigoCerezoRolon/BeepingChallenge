<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class OrderList extends Component
{
    public function render()
    {
        $orders=Order::all();
        return view('livewire.order-list',['orders'=>$orders])->layout('livewire.layouts.app');
    }
}

<?php

namespace App\Livewire\Dashboard\Menu\Trade\Orders;

use App\Models\currency_orders;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Show extends Component
{
    public $orders;
    public $sortedBy = 'created_at';
    public $count;

    public $myOrders;

    public function cancel(currency_orders $currency_orders)
    {
        try {
            $user = auth()->user();
            $user->orders()->delete();
        } catch (\Exception $e) {
            return $e->getCode();
        }
    }

    public function sortBy($by)
    {
        $this->sortedBy = $by;
    }
    public function render()
    {
        $user = auth()->user();
        $this->orders = $user->orders;
        $this->count = $this->orders->count();
//        $this->orders = currency_orders::orderBy($this->sortedBy, 'desc')->get();
        return view('livewire.dashboard.menu.trade.orders.show', [
            'orders' => $this->orders
        ]);
    }
}

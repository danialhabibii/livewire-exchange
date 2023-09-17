<?php

namespace App\Livewire\Dashboard\Menu\Orders;

use App\Livewire\Forms\dashboard\menu\orders\action;
use App\Models\Order;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Pagination\LengthAwarePaginator;

class Show extends Component
{
    public action $action;
    public Order $order;


    public $orders;
    public $count;
    public $search;

    public $select = false;


    public $selectedItems = [];

    public $destroyStatus = false;

    public function selectedAll()
    {
        $ids = Order::pluck('id')->toArray();
        $this->selectedItems = $ids;
        if (count($this->selectedItems) > 0) {
            $this->destroyStatus = true;
        } else {
            $this->destroyStatus = false;
        }
    }

    public function deleteAllSelected()
    {
        $items = Order::whereIn('id', $this->selectedItems)->get();
        try {
            foreach ($items as $item) {
                $item->delete();
            }
            $this->selectedItems = [];
            $this->select = false;
        } catch (\Exception $e) {
            return $e->getCode();
        }
    }

    public function destroy($orderId)
    {
        try {
            Order::findOrFail($orderId)->delete();
        } catch (\Exception $e) {
            return $e->getCode();
        }
    }

    public function render()
    {
        $this->orders = Order::where('customer', 'LIKE', '%' . $this->search . '%')->orWhere('order_id', 'LIKE', '%' . $this->search . '%')->get();
        $this->count = Order::all()->count();
        return view('livewire.dashboard.menu.orders.show');
    }
}

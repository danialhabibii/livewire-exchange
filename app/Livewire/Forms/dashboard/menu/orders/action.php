<?php

namespace App\Livewire\Forms\dashboard\menu\orders;

use App\Models\Order;
use Livewire\Attributes\Rule;
use Livewire\Form;

class action extends Form
{

    public function destroy($orderId){
        try {
            Order::findOrFail($orderId)->delete();
        } catch (\Exception $e) {
            return $e->getCode();
        }
    }
}

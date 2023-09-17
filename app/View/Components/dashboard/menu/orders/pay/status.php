<?php

namespace App\View\Components\dashboard\menu\orders\pay;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class status extends Component
{
    /**
     * Create a new component instance.
     */
    public $status;

    /**
     * @param $status
     */
    public function __construct($status = null)
    {
        $this->status = $status;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.menu.orders.pay.status');
    }
}

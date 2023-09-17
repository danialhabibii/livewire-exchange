<?php

namespace App\View\Components\dashboard\menu\orders\count;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class count extends Component
{
    /**
     * Create a new component instance.
     */
    public $count;

    /**
     * @param $count
     */
    public function __construct($count)
    {
        $this->count = $count;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.menu.orders.count.count');
    }
}

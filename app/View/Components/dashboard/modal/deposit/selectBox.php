<?php

namespace App\View\Components\dashboard\modal\deposit;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class selectBox extends Component
{
    /**
     * Create a new component instance.
     */

    public $title;

    /**
     * @param $title
     */
    public function __construct($title)
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.modal.deposit.select-box');
    }
}

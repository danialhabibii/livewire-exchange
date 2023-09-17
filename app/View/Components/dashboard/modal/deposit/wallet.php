<?php

namespace App\View\Components\dashboard\modal\deposit;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class wallet extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;
    public $class;

    /**
     * @param $title
     * @param $class
     */
    public function __construct($title, $class = null)
    {
        $this->title = $title;
        $this->class = $class;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.modal.deposit.wallet');
    }
}

<?php

namespace App\View\Components\dashboard\modal\deposit;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class action extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;
    public $class;
    public $status;

    /**
     * @param $title
     * @param $class
     */
    public function __construct($title, $class,$status)
    {
        $this->title = $title;
        $this->class = $class;
        $this->status = $status;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.modal.deposit.action');
    }
}

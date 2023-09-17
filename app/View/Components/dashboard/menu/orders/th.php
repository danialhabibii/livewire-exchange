<?php

namespace App\View\Components\dashboard\menu\orders;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class th extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;
    public $checkbox;
    public $date;

    /**
     * @param $title
     */
    public function __construct($title,$checkbox = null,$date = null)
    {
        $this->title = $title;
        $this->checkbox = $checkbox;
        $this->date = $date;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.menu.orders.th');
    }
}

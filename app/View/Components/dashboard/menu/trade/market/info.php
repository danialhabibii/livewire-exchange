<?php

namespace App\View\Components\dashboard\menu\trade\market;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class info extends Component
{
    /**
     * Create a new component instance.
     */
   public $title;
   public $number;

    /**
     * @param $title
     * @param $number
     */
    public function __construct($title, $number)
    {
        $this->title = $title;
        $this->number = $number;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.menu.trade.market.info');
    }
}

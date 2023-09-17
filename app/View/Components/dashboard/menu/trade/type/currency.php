<?php

namespace App\View\Components\dashboard\menu\trade\type;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class currency extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;
    public $if;

    /**
     * @param $title
     * @param $if
     */
    public function __construct($title, $if)
    {
        $this->title = $title;
        $this->if = $if;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.menu.trade.type.currency');
    }
}

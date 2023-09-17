<?php

namespace App\View\Components\dashboard\table;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class td extends Component
{
    /**
     * Create a new component instance.
     */


    public $name;
    public $icon;
    public $symbol;
    public $price;
    public $status;
    public $statusIcon;
    public $market;

    /**
     * @param $name
     * @param $icon
     * @param $symbol
     * @param $price
     * @param $status
     * @param $statusIcon
     * @param $market
     */
    public function __construct($name, $icon, $symbol, $price, $status, $statusIcon, $market)
    {
        $this->name = $name;
        $this->icon = $icon;
        $this->symbol = $symbol;
        $this->price = $price;
        $this->status = $status;
        $this->statusIcon = $statusIcon;
        $this->market = $market;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.table.td');
    }
}

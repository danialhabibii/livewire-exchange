<?php

namespace App\View\Components\dashboard\menu\trade\currency\cryptoBox;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class show extends Component
{
    /**
     * Create a new component instance.
     */
    public $if;
    public $symbol;
    public $chart;
    public $type;

    /**
     * @param $if
     * @param $symbol
     * @param $chart
     * @param $type
     */
    public function __construct($if, $symbol, $chart, $type)
    {
        $this->if = $if;
        $this->symbol = $symbol;
        $this->chart = $chart;
        $this->type = $type;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.menu.trade.currency.crypto-box.show');
    }
}

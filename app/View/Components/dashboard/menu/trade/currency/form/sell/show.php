<?php

namespace App\View\Components\dashboard\menu\trade\currency\form\sell;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class show extends Component
{
    /**
     * Create a new component instance.
     */
    public $symbol;
    public $buttons;

    /**
     * @param $symbol
     * @param $buttons
     */
    public function __construct($symbol, $buttons)
    {
        $this->symbol = $symbol;
        $this->buttons = $buttons;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.menu.trade.currency.form.sell.show');
    }
}

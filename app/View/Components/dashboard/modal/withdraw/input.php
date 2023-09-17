<?php

namespace App\View\Components\dashboard\modal\withdraw;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class input extends Component
{
    /**
     * Create a new component instance.
     */
   public $title;
   public $place;

    /**
     * @param $title
     * @param $place
     */
    public function __construct($title, $place)
    {
        $this->title = $title;
        $this->place = $place;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.modal.withdraw.input');
    }
}

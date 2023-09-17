<?php

namespace App\View\Components\dashboard\dropdown;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class dropdown extends Component
{
    /**
     * Create a new component instance.
     */

    public $title;
    public $icon;

    /**
     * @param $title
     * @param $icon
     */
    public function __construct($title, $icon)
    {
        $this->title = $title;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.dropdown.dropdown');
    }
}

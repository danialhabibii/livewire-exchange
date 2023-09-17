<?php

namespace App\View\Components\dashboard\dropdown;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class dropdownTop extends Component
{
    /**
     * Create a new component instance.
     */
   public $title;
   public $class;

    /**
     * @param $title
     */
    public function __construct($title,$class)
    {
        $this->title = $title;
        $this->class = $class;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.dropdown.dropdown-top');
    }
}

<?php

namespace App\View\Components\dashboard\button;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class button extends Component
{
    /**
     * Create a new component instance.
     */

    public $class;
    public $icon;
    public $title;
    public $status;

    /**
     * @param $class
     * @param $icon
     * @param $title
     */
    public function __construct($class, $icon, $title,$status = false)
    {
        $this->class = $class;
        $this->icon = $icon;
        $this->title = $title;
        $this->status = $status;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.button.button');
    }
}

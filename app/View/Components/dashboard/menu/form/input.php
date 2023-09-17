<?php

namespace App\View\Components\dashboard\menu\form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class input extends Component
{
    /**
     * Create a new component instance.
     */

    public $name;
    public $type;
    public function __construct($name,$type)
    {
        $this->name = $name;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.menu.form.input');
    }
}

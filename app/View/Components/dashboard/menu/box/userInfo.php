<?php

namespace App\View\Components\dashboard\menu\box;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class userInfo extends Component
{
    /**
     * Create a new component instance.
     */

    public $class;
    public $balance;
    public $type;
    public function __construct($class,$balance,$type)
    {
        $this->class = $class;
        $this->balance = $balance;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.menu.box.user-info');
    }
}

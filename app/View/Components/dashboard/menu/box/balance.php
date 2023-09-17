<?php

namespace App\View\Components\dashboard\menu\box;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class balance extends Component
{
    /**
     * Create a new component instance.
     */
    public $img;
    public $title;
    public $balance;
    public $type;
    public function __construct($img,$title,$balance,$type)
    {
        $this->img = $img;
        $this->title = $title;
        $this->balance = $balance;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.menu.box.balance');
    }
}

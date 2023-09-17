<?php

namespace App\View\Components\dashboard\menu\setting\subset;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class show extends Component
{
    /**
     * Create a new component instance.
     */
   public $buttons;
   public $title;
   public $icon;

    /**
     * @param $buttons
     * @param $title
     * @param $icon
     */
    public function __construct($buttons, $title, $icon)
    {
        $this->buttons = $buttons;
        $this->title = $title;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.menu.setting.subset.show');
    }
}

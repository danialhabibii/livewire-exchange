<?php

namespace App\View\Components\dashboard\menu\setting\notification\form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class input extends Component
{
    /**
     * Create a new component instance.
     */
   public $type;
   public $description;
   public $name;

    /**
     * @param $type
     * @param $description
     */
    public function __construct($type, $description,$name)
    {
        $this->type = $type;
        $this->description = $description;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.menu.setting.notification.form.input');
    }
}

<?php

namespace App\View\Components\dashboard\menu\setting\account\form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class input extends Component
{
    /**
     * Create a new component instance.
     */
   public $label;
   public $id;
   public $type;
   public $place;

    /**
     * @param $label
     * @param $id
     * @param $type
     * @param $place
     */
    public function __construct($label, $id, $type, $place)
    {
        $this->label = $label;
        $this->id = $id;
        $this->type = $type;
        $this->place = $place;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.menu.setting.account.form.input');
    }
}

<?php

namespace App\View\Components\dashboard\menu\setting\billing\form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class input extends Component
{
    /**
     * Create a new component instance.
     */
    public $id;
    public $label;
    public $place;

    /**
     * @param $id
     * @param $label
     * @param $place
     */
    public function __construct($id, $label, $place)
    {
        $this->id = $id;
        $this->label = $label;
        $this->place = $place;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.menu.setting.billing.form.input');
    }
}

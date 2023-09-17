<?php

namespace App\View\Components\dashboard\menu\setting\account\form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class area extends Component
{
    /**
     * Create a new component instance.
     */
    public $label;
    public $id;
    public $place;

    /**
     * @param $label
     * @param $id
     * @param $place
     */
    public function __construct($label, $id, $place)
    {
        $this->label = $label;
        $this->id = $id;
        $this->place = $place;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.menu.setting.account.form.area');
    }
}

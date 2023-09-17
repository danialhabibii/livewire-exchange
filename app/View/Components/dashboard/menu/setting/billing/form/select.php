<?php

namespace App\View\Components\dashboard\menu\setting\billing\form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class select extends Component
{
    /**
     * Create a new component instance.
     */
   public $id;
   public $label;

    /**
     * @param $id
     * @param $label
     */
    public function __construct($id, $label)
    {
        $this->id = $id;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.menu.setting.billing.form.select');
    }
}

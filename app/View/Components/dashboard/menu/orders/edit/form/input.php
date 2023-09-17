<?php

namespace App\View\Components\dashboard\menu\orders\edit\form;

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
    public $type;
    public $wire;
    public $checkbox;
    public $pay;
    public $value;

    /**
     * @param $id
     * @param $label
     * @param $type
     */
    public function __construct($value,$id, $label, $type,$wire,$checkbox = null,$pay = null,)
    {
        $this->id = $id;
        $this->label = $label;
        $this->type = $type;
        $this->wire = $wire;
        $this->checkbox = $checkbox;
        $this->pay = $pay;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.menu.orders.edit.form.input');
    }
}

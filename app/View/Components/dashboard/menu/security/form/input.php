<?php

namespace App\View\Components\dashboard\menu\security\form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class input extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;
    public $id;

    /**
     * @param $title
     * @param $id
     */
    public function __construct($title, $id)
    {
        $this->title = $title;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.menu.security.form.input');
    }
}

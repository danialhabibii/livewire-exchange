<?php

namespace App\View\Components\dashboard\menu\setting\notification\form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class flash extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.menu.setting.notification.form.flash');
    }
}

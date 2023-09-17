<?php

namespace App\View\Components\dashboard\users;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class status extends Component
{
    /**
     * Create a new component instance.
     */

    public $notification;
    public $count;

    /**
     * @param $notification
     * @param $count
     */
    public function __construct($notification, $count)
    {
        $this->notification = $notification;
        $this->count = $count;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.users.status');
    }
}

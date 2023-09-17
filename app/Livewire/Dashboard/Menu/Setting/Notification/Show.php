<?php

namespace App\Livewire\Dashboard\Menu\Setting\Notification;

use Livewire\Component;

class Show extends Component
{

    public function save()
    {
        try {
            $user = auth()->user();
            $user->notification = !$user->notification;
            $user->save();
            session()->flash('status','Profile Updated !');
        }
        catch (\Exception $e)
        {
            session()->flash('status','please try again.');
        }
    }

    public function render()
    {
        return view('livewire.dashboard.menu.setting.notification.show');
    }
}

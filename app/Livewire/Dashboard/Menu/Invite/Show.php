<?php

namespace App\Livewire\Dashboard\Menu\Invite;

use Livewire\Component;

class Show extends Component
{

    public function inviteProccess($invite_code){
        return redirect()->route('signup')->with('invite_code',$invite_code);
    }
    public function render()
    {
        return view('livewire.dashboard.menu.invite.show');
    }
}

<?php

namespace App\Livewire\Dashboard\Menu\Security;

use App\Livewire\Forms\dashboard\menu\security\form\Rules;
use App\Mail\password_recovery;
use App\Mail\Subscribe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Rule;
use Livewire\Component;
use mysql_xdevapi\Exception;

class Show extends Component
{
    public Rules $form;

    public function save(Request $request)
    {
        $this->validate();

        $user = auth()->user();
        try {
            if (Hash::check($this->form->current_password, $user->password)) {
                $user->password = Hash::make($this->form->password);
                $user->save();
                session()->flash('success', 'Password Successfully Updated.');
                Mail::to($user->email)->send(new password_recovery($user->name));
            }
        } catch (\Exception $e) {
            return $e->getCode();
        }

    }
    public function Factory()
    {
        $user = auth()->user();
        try {
            $user->two_factory = !$user->two_factory;
            $user->save();
        } catch (\Exception $e) {
            return $e->getCode();
        }
    }

    public function render()
    {
        return view('livewire.dashboard.menu.security.show');
    }
}

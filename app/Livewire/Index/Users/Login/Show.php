<?php

namespace App\Livewire\Index\Users\Login;

use App\Livewire\Forms\index\users\login\Rules;
use App\Mail\Subscribe;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Livewire\Component;
use Laravel\Socialite\Facades\Socialite;
use Mockery\Exception;

class Show extends Component
{

    public Rules $form;

    public function login()
    {
        try {
            if (auth()->attempt(['email' => $this->form->email, 'password' => $this->form->password])) {
                return redirect('/dashboard')->with('success', 'welcome back !');
            } else {
                session()->flash('error', 'Please try again.');
            }
        } catch (\Exception $e) {

            return $e->getCode();
        }
    }


    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $s_user = Socialite::driver('google')->user();
            $user = \App\Models\User::firstOrCreate(
                ['email' => $s_user->email],
                [
                    'name' => $s_user->name,
                    'password' => \Illuminate\Support\Facades\Hash::make(\Illuminate\Support\Str::random(10)),
                    'is_google'=>1,
                    'invite_code'=>uniqid(),
                ],
            );

            if ($s_user->avatar) {
                $user->profile_picture = $s_user->avatar;
                $user->save();
            }
            auth()->login($user, true);
            return redirect(\route('dashboard'))->with('welcome !');
        } catch (\Exception $e) {
            return $e->getCode();
        }
    }

    public function render()
    {
        return view('livewire.index.users.login.show');
    }
}

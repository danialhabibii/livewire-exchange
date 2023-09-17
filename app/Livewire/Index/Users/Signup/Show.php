<?php

namespace App\Livewire\Index\Users\Signup;

use App\Livewire\Forms\index\users\signup\Rules;
use App\Mail\Subscribe;
use App\Models\User;
use App\View\Components\email\welcome;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use Livewire\Component;
use Mockery\Exception;

class Show extends Component
{

    public Rules $form;

    public function register()
    {
            $user = User::create([
                'name' => $this->form->fullname,
                'profile_picture' => "1694757178.png",
                'email' => $this->form->email,
                'password' => $this->form->password,
                'invite_code'=>uniqid()
            ]);
            $this->VerifyMail();
            auth()->login($user, true);
            return redirect(route('dashboard'))->with('success', 'Your account Successfully Created !');

    }

    public function VerifyMail()
    {
        try {
            $str = Str::random(32);
            $activationHash = hash('sha256', $str);
            $user = auth()->user();
            $user->email_verified_hash = $activationHash;
            $user->activation_hash_created_at = Carbon::parse(Carbon::now());
            $user->save();
            Mail::to($this->form->email)->send(new Subscribe($this->form->fullname, $activationHash));
        } catch (\Exception $e) {
            return $e->getCode();
        }
    }

    public function render()
    {
        return view('livewire.index.users.signup.show');
    }
}

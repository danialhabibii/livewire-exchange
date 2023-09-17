<?php

namespace App\Livewire\Dashboard\EmailVerify;

use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;

class Check extends Component
{

    public function mount($hash)
    {
        $user = auth()->user();
        $hashCreatedAt = $user->activation_hash_created_at;
        $format = 'Y-m-d H:i:s';
        $givenDate = Carbon::createFromFormat($format, $hashCreatedAt);
        $currentTime = Carbon::now();

        $expire = $givenDate->diffInMinutes($currentTime);

        if ($user->email_verified_hash === $hash) {
            if ($expire >= 30) {
               return redirect(route('login'))->with('error','Invalid Request !');
            } else {
                $user->email_verified_hash = null;
                $user->email_verified_at = now();
                $user->is_verify = true;
                $user->save();
                return redirect(route('dashboard'))->with('success', 'Your Email SuccessFully Verified !');
            }
        } else {
            return redirect(route('home'))->with('error', 'Oops !');
        }
    }

    public function render()
    {
        return view('livewire.dashboard.email-verify.check');
    }
}

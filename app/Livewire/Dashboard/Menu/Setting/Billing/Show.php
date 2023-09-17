<?php

namespace App\Livewire\Dashboard\Menu\Setting\Billing;

use App\Livewire\Forms\dashboard\menu\setting\billing\Rules;
use App\Models\Billing;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Show extends Component
{
//    public Rules $form;

    public Billing $form;


    public function save(){
        $user = auth()->user();
        Billing::create([
            'form.user_id'=>$user->id,
            'form.bank'=>'maskan',
            'form.card_number'=>$this->card_number,
            'form.account_number'=>$this->account_number,
            'form.account_holder'=>$this->account_holder,
            'form.shaba_number'=>$this->shaba_number,
            'form.national_code'=>$this->national_code
        ]);
    }
    public function render()
    {
        return view('livewire.dashboard.menu.setting.billing.show');
    }
}

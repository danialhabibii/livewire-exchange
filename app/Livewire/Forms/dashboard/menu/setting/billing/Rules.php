<?php

namespace App\Livewire\Forms\dashboard\menu\setting\billing;

use Livewire\Attributes\Rule;
use Livewire\Form;

class Rules extends Form
{
    #[Rule('required',message: 'select bank is required.')]
    public $bank;
    #[Rule('required',message: 'card number fields is required.')]
    public $card_number;
    #[Rule('required',message: 'account number fields is required.')]
    public $account_number;
    #[Rule('required',message: 'account holder fields is required.')]
    public $account_holder;
    #[Rule('required',message: 'shaba number fields is required.')]
    public $shaba_number;
    #[Rule('required',message: 'national code fields is required.')]
    public $national_code;
}

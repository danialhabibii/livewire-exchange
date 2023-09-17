<?php

namespace App\Livewire\Forms\dashboard\menu\security\form;

use Livewire\Attributes\Rule;
use Livewire\Form;

class Rules extends Form
{
    #[Rule('required', message: 'current password is required')]
    public $current_password;
    #[Rule('required', message: 'new password is required')]
    #[Rule('min:5', message: 'password must be at least 5 characters')]
    #[Rule('confirmed', message: 'the password does not match the confirmation')]
    public $password;
    #[Rule('required', message: 'new password confirmation is required')]
    #[Rule('min:5', message: 'password must be at least 5 characters')]
    public $password_confirmation;
}

<?php

namespace App\Livewire\Forms\index\users\signup;

use Livewire\Attributes\Rule;
use Livewire\Form;

class Rules extends Form
{
    #[Rule('required',message: 'fullname is required')]
    public $fullname;
    #[Rule('required',message: 'email is required')]
    #[Rule('email',message: 'Please enter a valid email')]
    public $email;
    #[Rule('required',message: 'password is required')]
    #[Rule('min:5',message: 'minimum password value must be 5 characters')]
    #[Rule('confirmed',message: 'password does not match the confirmation')]
    public $password;
    #[Rule('required',message: 'password confirmation is required')]
    public $password_confirmation;
}

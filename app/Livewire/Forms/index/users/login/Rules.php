<?php

namespace App\Livewire\Forms\index\users\login;

use Livewire\Attributes\Rule;
use Livewire\Form;

class Rules extends Form
{
    #[Rule('required',message: 'email is required')]
    public $email;
    #[Rule('required',message: 'password is required')]
    public $password;
}

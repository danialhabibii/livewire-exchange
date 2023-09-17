<?php

namespace App\Livewire\Forms\dashboard\menu\setting\account;

use Livewire\Attributes\Rule;
use Livewire\Form;

class Rules extends Form
{


    public $profile_picture;
//    #[Rule('required',message: 'fullname field is required.')]
    public $full_name;
//    #[Rule('required',message: 'email field is required.')]
    public $email;
//    #[Rule('required',message: 'phone field is required.')]
    public $phone;
//    #[Rule('required',message: 'rule field is required.')]
    public $rule;
//    #[Rule('required',message: 'biography field is required.')]
    public $about;
//    #[Rule('required',message: 'location field is required.')]
    public $location;
//    #[Rule('required',message: 'website field is required.')]
    public $website;

}

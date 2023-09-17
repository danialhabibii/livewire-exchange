<?php

namespace App\Livewire\Forms\dashboard\menu\trade\buy;

use Livewire\Attributes\Rule;
use Livewire\Form;

class Rules extends Form
{
    public $usd_amount;
    public $btc_amounts;
    public $btc_price;
    #[Rule('nullable|numeric|min:10|max:250000')]
    public $usd_amounts;
    #[Rule('nullable|numeric|min:0.000002|max:100')]
    public $btc_amount;

}

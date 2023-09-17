<?php

namespace App\Livewire\Body;

use Livewire\Component;

class Theme extends Component
{

    public $darkMode = false;

    public function toggleTheme()
    {
        $this->darkMode = !$this->darkMode;
    }

    public function render()
    {
        return view('livewire.body.theme');
    }
}

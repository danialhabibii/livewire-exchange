<?php

namespace App\Livewire\Dashboard\Menu\Setting;

use Livewire\Component;

class Show extends Component
{
    public $component = 'account';
    public $buttons = [
        ['name' => 'account', 'status' => true],
        ['name' => 'billing', 'status' => false],
        ['name' => 'notification', 'status' => false]
    ];
    public function loadcomponent($name)
    {
        $this->component = $name;
        foreach ($this->buttons as &$button) {
            $button['status'] = ($button['name'] == $name);
        }
    }

    public function render()
    {
        return view('livewire.dashboard.menu.setting.show');
    }
}

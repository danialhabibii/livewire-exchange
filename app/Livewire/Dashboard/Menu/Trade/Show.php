<?php

namespace App\Livewire\Dashboard\Menu\Trade;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Attributes\Js;
use Livewire\Component;

class Show extends Component
{
    use AuthorizesRequests;

    public $providers = ['UserAccess'];
    public $component = 'buy';
    public $symbol_component = 'usd';
    public $main_component = 'btc';
    public $type = 'usd';
    public $buttons = [
        ['name' => 'buy', 'status' => true],
        ['name' => 'sell', 'status' => false],
    ];
    public $symbols = [
        ['name' => 'usd', 'status' => true],
        ['name' => 'eur', 'status' => false],
//        ['name' => 'gbp', 'status' => false],
//        ['name' => 'jpy', 'status' => false],
    ];

    public $main = [
        ['name' => 'btc', 'status' => true],
        ['name' => 'eth', 'status' => false],
        ['name' => 'bnb', 'status' => false],
        ['name' => 'xmr', 'status' => false],
        ['name' => 'doge', 'status' => false],
        ['name' => 'ada', 'status' => false],
    ];

    public function loadSymbol($name)
    {
        $this->symbol_component = $name;
        foreach ($this->symbols as &$symbol) {
            $symbol['status'] = ($symbol['name'] == $name);
        }
    }

    public function loadcomponent($name)
    {
        $this->component = $name;
        foreach ($this->buttons as &$button) {
            $button['status'] = ($button['name'] == $name);
        }
    }

    public function loadMain($name, $type = 'usd')
    {
        $this->type = $type;
        $this->main_component = $name;
        foreach ($this->main as &$item) {
            $item['status'] = ($item['name'] == $name);
        }
    }

    public function render()
    {
        $this->dispatch('contentChanged');
        return view('livewire.dashboard.menu.trade.show');
    }
}

<?php

namespace App\Livewire\Dashboard\Index;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Livewire\Component;

class Index extends Component
{
    public $search = '';
    public $component = 'dashboard';
    public $notification;
    public $notification_count;

    public $buttons = [
        ['name' => 'dashboard', 'status' => true],
        ['name' => 'orders', 'status' => false],
        ['name' => 'trade', 'status' => false],
        ['name' => 'academic', 'status' => false],
        ['name' => 'invite', 'status' => false],
        ['name' => 'security', 'status' => false],
        ['name' => 'settings', 'status' => false],
    ];


    public function mount()
    {
        $this->search = '';
    }

    public function searchComponent()
    {
        $this->buttons = collect($this->buttons);
        if ($this->search !== '') {
            $foundItem = $this->buttons->first(function ($item) {
                return $item['name'] === $this->search;
            });

            if ((!is_null($foundItem))) {
                $this->component = $this->search;
                $this->search = '';
            }
        }
    }

    public function loadcomponent($name)
    {
        $this->component = $name;
        foreach ($this->buttons as &$button) {
            $button['status'] = ($button['name'] == $name);
        }
    }


    public function logout(Request $request)
    {
        try {
            auth()->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect(route('home'));
        } catch (\Exception $e) {
            return $e->getCode();
        }
    }

    public function render()
    {
        $user = auth()->user();
        $this->notification = $user->notifications;
        if ($this->notification === 0) {
            $this->notification = "empty notification";
        }
        $this->notification_count = $this->notification->count();
        return view('livewire.dashboard.index.index');
    }
}

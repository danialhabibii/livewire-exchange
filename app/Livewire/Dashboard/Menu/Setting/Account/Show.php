<?php

namespace App\Livewire\Dashboard\Menu\Setting\Account;

use App\Livewire\Forms\dashboard\menu\setting\account\Rules;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image as ResizeImage;

class Show extends Component
{
    public Rules $form;


    use WithFileUploads;


    public function save()
    {
            $user = auth()->user();
            if ($this->form->full_name) {
                $user->name = $this->form->full_name;
            } elseif ($this->form->email) {
                $user->email = $this->form->email;
            } elseif ($this->form->rule) {
                $user->rule = $this->form->rule;
            } elseif ($this->form->about) {
                $user->about = $this->form->about;
            } elseif ($this->form->location) {
                $user->location = $this->form->location;
            } elseif ($this->form->website) {
                $user->website = $this->form->website;
            }
            if ($this->form->profile_picture) {
                $fileName = time() . '.' . $this->form->profile_picture->extension();
                $this->form->profile_picture->storeAs('public/pictures', $fileName);
                $user->profile_picture = $fileName;
                $image = Image::make(public_path('storage/pictures/' . auth()->user()->profile_picture))->fit(300, 300);
                $image->save();
                $user->is_google = false;
            } else {
                return false;
            }
        $user->save();
    }

    public function render()
    {
        return view('livewire.dashboard.menu.setting.account.show');
    }
}

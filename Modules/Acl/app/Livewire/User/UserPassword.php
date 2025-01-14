<?php

namespace Modules\Acl\Livewire\User;

use App\Models\User;
use Livewire\Component;

class UserPassword extends Component
{

    public $user;
    public $password;
    public $password_confirmation;

    protected $listeners = ['editPassword'];


    public function editPassword($id)
    {
        $this->resetValidation();
        $this->user = User::find($id);


    }


    public function render()
    {
        return view('acl::livewire.user.user-password');
    }


    public function updatePassword()
    {
        $this->validate([
            'password' => 'required|confirmed|min:8',
        ]);

        $this->user->password = bcrypt($this->password);
        $this->user->save();

        $this->dispatch('notify', ['type' => 'success', 'message' => 'Password updated successfully']);
    }
}

<?php

namespace Modules\User\Livewire\Profile;

use Livewire\Component;

class Security extends Component
{

    public $currentPassword;
    public $newPassword;
    public $confirmPassword;

    public function render()
    {
        return view('user::livewire.profile.security');
    }

    public function save()
    {

        $this->validate([
            'currentPassword' => 'required',
            'newPassword' => 'required|min:8',
            'confirmPassword' => 'required|same:newPassword',
        ]);


        $user = auth()->user();



        if (!\Hash::check($this->currentPassword, $user->password)) {
            $this->addError('currentPassword', 'Current password is incorrect.');
            return;
        }

        $user->password = \Hash::make($this->newPassword);
        $user->save();

        $this->currentPassword = '';
        $this->newPassword = '';
        $this->confirmPassword = '';
        
        $this->dispatch('notify', ['message' => 'Password updated successfully.',
            'type' => 'success']);
    }
}

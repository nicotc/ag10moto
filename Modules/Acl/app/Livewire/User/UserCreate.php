<?php

namespace Modules\Acl\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Modules\Idiomas\Models\Lang;
use Spatie\Permission\Models\Role;

class UserCreate extends Component
{
    public $user;

    public $firstName;

    public $lastName;

    public $email;

    public $role;

    public $roleslist = [];

    public $password;

    public $password_confirmation;

    public $lang;

    public $langlist = [];

    public function render()
    {
        $this->langlist = Lang::pluck('lang', 'id');

        $this->roleslist = Role::pluck('name');

        return view('acl::livewire.user.user-create');
    }

    public function createUser()
    {
        $this->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email|unique:users,email',
            'role' => 'required',
            'password' => 'required|confirmed',
            'lang' => 'required',
        ]);

        $this->user = User::create([
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'user_name' => $this->email,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'profile_photo_path' => 'assets/img/avatars/1.png',
            'langs_id' => $this->lang,
        ]);
        $this->user->assignRole($this->role);
        $this->reset(['firstName', 'lastName', 'email', 'role', 'password', 'password_confirmation']);
        $this->dispatch('notify', ['type' => 'success', 'message' => 'User created successfully']);
        $this->langlist = Lang::pluck('lang', 'id');
    }
}
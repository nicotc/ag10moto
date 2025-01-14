<?php

namespace Modules\Acl\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class UserCreate extends Component
{

    public $user;

    public $name;
    public $email;
    public $role;
    public $roleslist = [];
    public $password;
    public $password_confirmation;






    public function render()
    {

        $this->roleslist = Role::pluck('name');

        return view('acl::livewire.user.user-create');
    }

    public function createUser()
    {
        $this->validate([
            'name' => 'required|alpha_dash|unique:users,user_name'. $this->user->id,
            'email' => 'required|email|unique:users,email',
            'role' => 'required',
            'password' => 'required|confirmed'
        ]);

        $this->user = User::create([
            'user_name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'profile_photo_path' => 'assets/img/avatars/1.png'
        ]);

        $this->user->assignRole($this->role);

        $this->reset(['name', 'email', 'role', 'password', 'password_confirmation']);



        $this->dispatch('notify', ['type' => 'success', 'message' => 'User created successfully']);
    }

}

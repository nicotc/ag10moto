<?php

namespace Modules\Acl\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class UserEdit extends Component
{

    public $user;

    public $name;
    public $email;
    public $role;
    public $roleslist = [];


    protected $listeners = ['editUser'];



    public function editUser($id)
    {
        $this->resetValidation();

        $this->user = User::find($id);
        $this->name = $this->user->user_name;
        $this->email = $this->user->email;
        $this->role = $this->user->roles->first()->name;


    }



    public function render()
    {
        $this->roleslist = Role::pluck('name');

        return view('acl::livewire.user.user-edit');
    }


    public function updateUser()
    {
        $this->validate([
            'name' => 'required|alpha_dash|unique:users,user_name,'. $this->user->id,
            'email' => 'required|email|unique:users,email,' . $this->user->id,
            'role' => 'required'
        ]);

        $this->user->user_name = $this->name;
        $this->user->email = $this->email;
        $this->user->save();

        // eliminar todos los roles del usuario y asignar el nuevo rol
        $this->user->syncRoles([]);
        $this->user->assignRole($this->role);



        $this->dispatch('notify', [
            'message' => 'Usuario actualizado',
            'type' => 'success',
        ]);


    }

}

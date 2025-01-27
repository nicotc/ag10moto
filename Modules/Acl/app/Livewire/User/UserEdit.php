<?php

namespace Modules\Acl\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class UserEdit extends Component
{

    public $user;
    public $firstName;
    public $lastName;
    public $name;
    public $email;
    public $role;
    public $roleslist = [];
    public $lang;
    public $langlist = [
        'en' => 'English',
        'es' => 'Spanish',
        'fr' => 'French'
        ];


    protected $listeners = ['editUser'];



    public function editUser($id)
    {
        $this->resetValidation();

        $this->user = User::find($id);
        $this->name = $this->user->user_name;
        $this->email = $this->user->email;
        $this->role = $this->user->roles->first()->name;
        $this->lang = $this->user->language;
        $this->firstName = $this->user->first_name;
        $this->lastName = $this->user->last_name;




    }



    public function render()
    {
        $this->roleslist = Role::pluck('name');

        return view('acl::livewire.user.user-edit');
    }


    public function updateUser()
    {
    //     dd($this->email,
    //     $this->lang,
    //     $this->firstName,
    //     $this->lastName,
    //     $this->role

    // );

        $this->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email|unique:users,email,' . $this->user->id,
            'role' => 'required',
            'lang' => 'required'
        ]);


        $this->user->email = $this->email;
        $this->user->language = $this->lang;
        $this->user->first_name = $this->firstName;
        $this->user->last_name = $this->lastName;


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

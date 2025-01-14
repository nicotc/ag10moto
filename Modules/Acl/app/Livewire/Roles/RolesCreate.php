<?php

namespace Modules\Acl\Livewire\Roles;

use Livewire\Component;

class RolesCreate extends Component
{

    public $name;
    public $permissions = [];
    public $perm = [];


    public function mount()
    {
        $permissions = \Spatie\Permission\Models\Permission::all();

        foreach ($permissions as $permission) {
            [$module, $name] = explode('_', $permission->name);
            $this->permissions[$module][] = $permission;
        }
    }



    public function render()
    {

        return view('acl::livewire.roles.roles-create');
    }

    public function storeRole()
    {



        $this->validate([
            'name' => 'required|unique:roles,name'
        ]);

        $role = \Spatie\Permission\Models\Role::create(['name' => $this->name]);

        foreach ($this->perm as $permission => $value) {
            if ($value == true) {
                $permisos[] = $permission;
            }

        }
        $role->syncPermissions($permisos);

        $this->dispatch('notify', [
            'type' => 'success',
            'message' => 'Role created successfully'
        ]);
    }
}

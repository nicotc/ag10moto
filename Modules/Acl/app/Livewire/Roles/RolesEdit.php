<?php

namespace Modules\Acl\Livewire\Roles;

use Livewire\Component;

class RolesEdit extends Component
{

    public $roleId;
    public $name;
    public $permissions = [];
    public $perm = [];

    protected $listeners = ['editRole', 'notify'];


    public function editRole($id)
    {
        $this->roleId = $id;
        $this->resetValidation();

        $role = \Spatie\Permission\Models\Role::find($id);
        $this->name = $role->name;

        $permissions = $role->permissions->pluck('name')->toArray();

        foreach ($permissions as $permission) {
            $this->perm[$permission] = true;
        }
    }


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
        return view('acl::livewire.roles.roles-edit');
    }

    public function updateRole()
    {

        $id = $this->roleId;



        $this->validate([
            'name' => 'required|unique:roles,name,' . $id
        ]);

        $role = \Spatie\Permission\Models\Role::find($id);
        $role->name = $this->name;
        $role->save();

        $permisos = [];

        foreach ($this->perm as $permission => $value) {
            if($value == true){
                $permisos[] = $permission;
            }
        }

        $role->syncPermissions($permisos);

        $this->reset('name', 'perm');
        $this->dispatch('notify', [
            'type' => 'success',
            'message' => 'Role updated successfully'
        ]);
    }
}

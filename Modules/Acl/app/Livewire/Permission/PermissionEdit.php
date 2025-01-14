<?php

namespace Modules\Acl\Livewire\Permission;

use Livewire\Component;
use Spatie\Permission\Models\Permission;

class PermissionEdit extends Component
{


    public $permission;
    public $name;

    protected $listeners = ['editPermission'];

    public function editPermission($id)
    {
        $this->resetValidation();

        $this->permission = Permission::find($id);
        $this->name = $this->permission->name;
    }

    public function render()
    {
        return view('acl::livewire.permission.permission-edit');
    }

    public function updatePermission()
    {
        $this->validate([
            'name' => 'required|unique:permissions,name,' . $this->permission->id
        ]);

        $this->permission->name = $this->name;
        $this->permission->save();

         $this->dispatch('notify', [
                'type' => 'success',
                'message' => 'Permission updated successfully'
            ]);
    }
}

<?php

namespace Modules\Acl\Livewire\Permission;

use Livewire\Component;
use Spatie\Permission\Models\Permission;

class PermissionCreate extends Component
{

    public $name;

    public function render()
    {
        return view('acl::livewire.permission.permission-create');
    }

    public function createPermission()
    {
        $this->validate([
            'name' => 'required|unique:permissions'
        ]);

        $permission = Permission::create([
            'name' => $this->name
        ]);

        $this->reset(['name']);
        
        $this->dispatch('notify', ['type' => 'success', 'message' => 'Permission created successfully']);
    }
}

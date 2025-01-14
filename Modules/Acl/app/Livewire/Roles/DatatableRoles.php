<?php

namespace Modules\Acl\Livewire\Roles;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Nicotc\Datatable\Http\Livewire\Datatable;

class DatatableRoles extends Datatable
{
    protected $listeners = ['deleteRoleConfirmed', 'notify'];


    public function config()
    {
        $this->itmesPerPage = 10;
        $this->visibleColumns = [
            'id',
            'name',
            'created_at',
            'updated_at'
        ];

        $this->create = true;
        $this->export = true;

        $this->actions = [
            'edit' => [
                'icon' => 'edit',
                'isModal' => true,
                'params' => ['id'],
                'event' => 'editRole'
            ],
            'delete' => [
                'icon' => 'trash',
                'isModal' => true,
                'params' => ['id'],
                'event' => 'deleteRole'

            ]
        ];
        $this->createAction = [
            'label' => 'Create Role',
            'icon' => 'bx bx-plus',
            'event' => 'createRole',
            'isModal' => true

        ];
    }

    public function buildQuery()
    {
        $query =  Role::select(
            'id',
            'name',
            'created_at',
            'updated_at',
        )->where('name', '!=', 'Super Admin');


        // where funcion group
        $query->where(function ($query) {
            $query->where('name', 'like', '%' . $this->searchTerm . '%');
        });

        if($this->search['id'] ?? false) {
            $query->where('id', $this->search['id']);
        }

        if($this->search['name'] ?? false) {
            $query->where('name', 'like', '%' . $this->search['name'] . '%');
        }




        $query->orderBy($this->sortColumn, $this->sortDirection);







        return $query;
    }

    public function getHeaders()
    {
        return [
            'id' => [
                'label' => 'ID',
                'func' => function($value) {
                    return $value;
                 },
                'sortable' => true,
                'searchable' => true
            ],
             'name' => [
                'label' => 'name',
                'func' => function($value) {
                    return $value;
                 },
                'sortable' => true,
                'searchable' => true
                ],
            'created_at' => [
                'label' => 'Created At',
                'func' => function($value) {
                    return $value;
                 },
                'sortable' => true,
                'searchable' => true
            ],
            'updated_at' => [
                'label' => 'Updated At',
                'func' => function($value) {
                    return $value;
                 },
                'sortable' => true,
                'searchable' => true
            ]




        ];
    }


    public function deleteRoleConfirmed($id)
    {
        //Verificar si hay usuarios activos con este rol para no eliminarlo

        $users = User::role($id)->count();

        if($users > 0){
            $this->dispatch('notify', [
                'type' => 'error',
                'message' => 'There are active users with this role'
            ]);
            return;
        }

        $role = Role::find($id);
        $role->delete();
        $this->dispatch('notify', [
            'type' => 'success',
            'message' => 'Role deleted successfully'
        ]);
    }




}

<?php

namespace Modules\Acl\Livewire\User;

use App\Models\User;
use Nicotc\Datatable\Http\Livewire\Datatable;


class DatatableUsers extends Datatable
{

    protected $listeners = ['deleteUserConfirmed', 'notify'];
    public function config()
    {
        $this->itmesPerPage = 10;
        $this->visibleColumns = [
            'id',
            'first_name',
            'last_name',
            'user_name',
            'email',
            'roles'
        ];

        $this->create = true;
        $this->export = true;
        $this->actions = [
            'Edit' => [
                'icon' => 'bx bx-edit',
                'params' => ['id'],
                'event' => 'editUser',
                'isModal' => true,
            ],
            'Password' => [
                'icon' => 'bx bx-key',
                'params' => ['id'],
                'event' => 'editPassword',
                'isModal' => true,
            ],
            'Delete' => [
                'icon' => 'bx bx-trash',
                'event' => 'deleteUser',
                'isModal' => true,
                'params' => ['id'],
                'confirm' => true
            ]
        ];
        $this->createAction = [
            'label' => 'Create User',
            'icon' => 'bx bx-plus',
            'event' => 'createUser',
            'isModal' => true

        ];
    }

    public function buildQuery()
    {
        $query =  User::select(
            'users.id',
            'users.first_name',
            'users.last_name',
            'users.user_name',
            'users.email',
            'users.created_at',
            'users.updated_at',
            'model_has_roles.role_id',
            'roles.name as roles'

        )
        ->join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
        ->join('roles', 'model_has_roles.role_id', '=', 'roles.id')
        ->where('model_has_roles.model_type', 'App\Models\User');


        // where funcion group
        $query->where(function ($query) {
            $query->where('users.first_name', 'like', '%' . $this->searchTerm . '%')
                ->orWhere('users.last_name', 'like', '%' . $this->searchTerm . '%')
                ->orWhere('users.user_name', 'like', '%' . $this->searchTerm . '%')
                ->orWhere('users.email', 'like', '%' . $this->searchTerm . '%')
                ->orWhere('users.created_at', 'like', '%' . $this->searchTerm . '%')
                ->orWhere('users.updated_at', 'like', '%' . $this->searchTerm . '%')
                ->orWhere('roles.name', 'like', '%' . $this->searchTerm . '%');
        });

        if($this->search['id'] ?? false) {
            $query->where('users.id', $this->search['id']);
        }

        if($this->search['first_name'] ?? false) {
            $query->where('users.first_name', 'like', '%' . $this->search['first_name'] . '%');
        }

        if($this->search['last_name'] ?? false) {
            $query->where('users.last_name', 'like', '%' . $this->search['last_name'] . '%');
        }

        if($this->search['user_name'] ?? false) {
            $query->where('users.user_name', 'like', '%' . $this->search['user_name'] . '%');
        }

        if($this->search['email'] ?? false) {
            $query->where('users.email', 'like', '%' . $this->search['email'] . '%');
        }

        if($this->search['created_at'] ?? false) {
            $query->where('users.created_at', 'like', '%' . $this->search['created_at'] . '%');
        }

        if($this->search['updated_at'] ?? false) {
            $query->where('users.updated_at', 'like', '%' . $this->search['updated_at'] . '%');
        }

        if($this->search['roles'] ?? false) {
            $query->where('roles.name', 'like', '%' . $this->search['roles'] . '%');
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
            'first_name' => [
                'label' => 'First Name',
                'func' => function($value) {
                    return $value;
                 },
                'sortable' => true,
                'searchable' => true
            ],
            'last_name' => [
                'label' => 'Last Name',
                'func' => function($value) {
                    return $value;
                 },
                'sortable' => true,
                'searchable' => true
            ],
            'user_name' => [
                'label' => 'User Name',
                'func' => function($value) {
                    return $value;
                 },
                'sortable' => true,
                'searchable' => true
            ],
              'email' =>
            [
                'label' => 'email',
                'func' => function($value) {
                    return $value;
                 },
                'sortable' => true,
                'searchable' => true
            ],
            'roles' => [
                'label' => 'Roles',
                'func' => function($value) {
                    return $value;
                 },
                'sortable' => true,
                'searchable' => true
                ],
               'created_at' => [
                'label' => 'created_at',
                'func' => function($value) {
                    return $value;
                 },
                'sortable' => true,
                'searchable' => true
            ],


                'updated_at' => [
                'label' => 'updated_at',
                'func' => function($value) {
                    return $value;
                 },
                'sortable' => true,
                'searchable' => true
                ]

        ];
    }

    public function deleteUserConfirmed($id)
    {
        User::find($id)->delete();
        $this->dispatch('notify', ['type' => 'success', 'message' => 'User deleted successfully']);
    }



}

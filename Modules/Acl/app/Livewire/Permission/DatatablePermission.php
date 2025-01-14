<?php

namespace Modules\Acl\Livewire\Permission;

use Nicotc\Datatable\Http\Livewire\Datatable;
use Spatie\Permission\Models\Permission;

class DatatablePermission extends Datatable
{

    protected $listeners = ['deletePermissionConfirmed', 'notify'];


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
                'event' => 'editPermission'
            ],
            'delete' => [
                'icon' => 'trash',
                'isModal' => true,
                'params' => ['id'],
                'event' => 'deletePermission'
            ]
        ];
        $this->createAction = [
            'label' => 'Create Permission',
            'icon' => 'bx bx-plus',
            'event' => 'createPermission',
            'isModal' => true

        ];
    }

    public function buildQuery()
    {
        $query =  Permission::select(
            'id',
            'name',
            'created_at',
            'updated_at',
        );


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


    public function deletePermissionConfirmed($id)
    {
        Permission::find($id)->delete();
        $this->dispatch('notify', ['type' => 'success', 'message' => 'Permission deleted successfully']);
    }



}


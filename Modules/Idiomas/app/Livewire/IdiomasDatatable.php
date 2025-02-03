<?php

namespace Modules\Idiomas\Livewire;

use Carbon\Language;

use Modules\Idiomas\Models\Lang;

use Nicotc\Datatable\Http\Livewire\Datatable;


class IdiomasDatatable extends Datatable
{
    public $dropdown = true;

    protected $listeners = ['deletePermissionConfirmed', 'notify'];


    public function config()
    {
        $this->itmesPerPage = 10;
        $this->visibleColumns = [
            'id',
            'lang',
            'iso',
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


        $query =  Lang::select(
            'id',
            'lang',
            'iso',
            'created_at',
            'updated_at',
        );


        // where funcion group
        $query->where(function ($query) {
            $query->where('lang', 'like', '%' . $this->searchTerm . '%');
        });

        if ($this->search['id'] ?? false) {
            $query->where('id', $this->search['id']);
        }

        if ($this->search['name'] ?? false) {
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
                'func' => function ($value) {
                    return $value;
                },
                'sortable' => true,
                'searchable' => true
            ],
            'lang' => [
                'label' => 'lang',
                'func' => function ($value) {
                    return $value;
                },
                'sortable' => true,
                'searchable' => true
            ],
            'iso' => [
                'label' => 'iso',
                'func' => function ($value) {
                    return $value;
                },
                'sortable' => true,
                'searchable' => true
            ],
            'created_at' => [
                'label' => 'Created At',
                'func' => function ($value) {
                    return $value;
                },
                'sortable' => true,
                'searchable' => true
            ],
            'updated_at' => [
                'label' => 'Updated At',
                'func' => function ($value) {
                    return $value;
                },
                'sortable' => true,
                'searchable' => true
            ]




        ];
    }


    public function deletePermissionConfirmed($id)
    {
        Lang::find($id)->delete();
        $this->dispatch('notify', ['type' => 'success', 'message' => 'Permission deleted successfully']);
    }
}

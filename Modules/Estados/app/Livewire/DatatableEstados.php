<?php

namespace Modules\Estados\Livewire;

use Modules\Estados\Models\Status;
use Nicotc\Datatable\Http\Livewire\Datatable;

class DatatableEstados extends Datatable
{
    public $dropdown = true;

    protected $listeners = ['deleteConfirmed', 'notify'];

    public function config()
    {
        $this->itmesPerPage = 10;
        $this->visibleColumns = [
            'id',
            'name',
            // 'color',
            'email',

            'created_at',
            'updated_at',
        ];

        $this->create = true;
        $this->export = true;
        $this->actions = [
            'edit' => [
                'icon' => 'edit',
                'isModal' => true,
                'params' => ['id'],
                'event' => 'editModal',
            ],
            'delete' => [
                'icon' => 'trash',
                'isModal' => true,
                'params' => ['id'],
                'event' => 'delete',
            ],
        ];
        $this->createAction = [
            'label' => 'Create ',
            'icon' => 'bx bx-plus',
            'event' => 'createModal',
            'isModal' => true,

        ];
    }

    public function buildQuery()
    {
        $query = Status::select(
            'id',
            'name',
            // 'color',
            'email'

        );

        // where funcion group
        $query->where(function ($query) {
            $query->where('name', 'like', '%'.$this->searchTerm.'%');
        });

        if ($this->search['name'] ?? false) {
            $query->where('name', 'like', '%'.$this->search['name'].'%');
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
                'searchable' => true,
            ],
            'name' => [
                'label' => 'Type',
                'func' => function ($value) {
                    return $value;
                },
                'sortable' => true,
                'searchable' => true,
            ],
            // 'color' => [
            //     'label' => 'Color',
            //     'func' => function ($value) {
            //         return $value;
            //     },
            //     'sortable' => true,
            //     'searchable' => true
            // ],
            'email' => [
                'label' => 'Email',
                'func' => function ($value) {
                    return $value;
                },
                'sortable' => true,
                'searchable' => true,
            ],

            'created_at' => [
                'label' => 'Created At',
                'func' => function ($value) {
                    return $value;
                },
                'sortable' => true,
                'searchable' => true,
            ],
            'updated_at' => [
                'label' => 'Updated At',
                'func' => function ($value) {
                    return $value;
                },
                'sortable' => true,
                'searchable' => true,
            ],

        ];
    }
}

<?php

namespace Modules\Contacproduct\Livewire;

use App\Models\Otros;
use Nicotc\Datatable\Http\Livewire\Datatable;
use Spatie\Permission\Models\Permission;


class ContactDatatable extends Datatable
{

    public $sortColumn = 'id';
    public $sortDirection = 'desc';

    public $dropdown = true;
    protected $listeners = ['deletePermissionConfirmed', 'notify'];


    public function config()
    {
        $this->itmesPerPage = 10;
        $this->visibleColumns = [

            'nombre',
            'email',
            'telefono',
            'horallamada',
            'lang',
            'item',
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
        $query =  Otros::select(
            'id',
            'id_pedidos',
            'nombre',
            'email',
            'telefono',
            'horallamada',
            'lang',
            'item',
            'created_at',
            'updated_at',
        );


        // where funcion group
        $query->where(function ($query) {
            $query->where('nombre', 'like', '%' . $this->searchTerm . '%');
        });


        if ($this->search['nombre'] ?? false) {
            $query->where('nombre', 'like', '%' . $this->search['nombre'] . '%');
        }

        if ($this->search['email'] ?? false) {
            $query->where('email', 'like', '%' . $this->search['email'] . '%');
        }


        if ($this->search['telefono'] ?? false) {
            $query->where('telefono', 'like', '%' . $this->search['telefono'] . '%');
        }
        if ($this->search['horallamada'] ?? false) {
            $query->where('horallamada', 'like', '%' . $this->search['horallamada'] . '%');
        }
        if ($this->search['lang'] ?? false) {
            $query->where('lang', 'like', '%' . $this->search['lang'] . '%');
        }
        if ($this->search['item'] ?? false) {
            $query->where('item', 'like', '%' . $this->search['item'] . '%');
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
            'item' => [
                'label' => 'item',
                'func' => function ($value) {
                    return $value;
                },
                'sortable' => true,
                'searchable' => true
            ],
            'nombre' => [
                'label' => 'nombre',
                'func' => function ($value) {
                    return $value;
                },
                'sortable' => true,
                'searchable' => true
            ],
            'email' => [
                'label' => 'email',
                'func' => function ($value) {
                    return $value;
                },
                'sortable' => true,
                'searchable' => true
            ],
            'telefono' => [
                'label' => 'telefono',
                'func' => function ($value) {
                    return $value;
                },
                'sortable' => true,
                'searchable' => true
            ],
            'horallamada' => [
                'label' => 'hora llamada',
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
}

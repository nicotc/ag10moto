<?php

namespace Modules\Pedidos\Livewire;

use App\Models\Pedidos;
use Nicotc\Datatable\Http\Livewire\Datatable;



class DatatablePedidos extends Datatable
{

    public $dropdown = false;


    protected $listeners = ['deleteUserConfirmed', 'notify'];


    public function buildQuery()
    {
        $query =  Pedidos::select(
            'id',
            'id_pedidos',
            'nombre',
            'email',
            'telefono',
            'problema',
            'imagenes',
            'lang',
            'created_at',
            'updated_at'

        );

        $query->where(function ($query) {
            $query->where('id', 'like', '%' . $this->searchTerm . '%')
                ->orWhere('id_pedidos', 'like', '%' . $this->searchTerm . '%')
                ->orWhere('nombre', 'like', '%' . $this->searchTerm . '%')
                ->orWhere('email', 'like', '%' . $this->searchTerm . '%')
                ->orWhere('telefono', 'like', '%' . $this->searchTerm . '%')
                ->orWhere('problema', 'like', '%' . $this->searchTerm . '%')
                ->orWhere('imagenes', 'like', '%' . $this->searchTerm . '%')
                ->orWhere('lang', 'like', '%' . $this->searchTerm . '%')
                ->orWhere('created_at', 'like', '%' . $this->searchTerm . '%')
                ->orWhere('updated_at', 'like', '%' . $this->searchTerm . '%');
        });

        if($this->search['id'] ?? false) {
            $query->where('id', $this->search['id']);
        }

        if($this->search['id_pedidos'] ?? false) {
            $query->where('id_pedidos', 'like', '%' . $this->search['id_pedidos'] . '%');
        }

        if($this->search['nombre'] ?? false) {
            $query->where('nombre', 'like', '%' . $this->search['nombre'] . '%');
        }

        if($this->search['email'] ?? false) {
            $query->where('email', 'like', '%' . $this->search['email'] . '%');
        }

        if($this->search['telefono'] ?? false) {
            $query->where('telefono', 'like', '%' . $this->search['telefono'] . '%');
        }

        if($this->search['problema'] ?? false) {
            $query->where('problema', 'like', '%' . $this->search['problema'] . '%');
        }

        if($this->search['imagenes'] ?? false) {
            $query->where('imagenes', 'like', '%' . $this->search['imagenes'] . '%');
        }



        if($this->search['lang'] ?? false) {
            $query->where('lang', 'like', '%' . $this->search['lang'] . '%');
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
            'id_pedidos' => [
                'label' => 'ID Pedidos',
                'func' => function ($value) {
                    return $value;
                },
                'sortable' => true,
                  'searchable' => true
            ],
            'nombre' => [
                'label' => 'Nombre',
                'func' => function ($value) {
                    return $value;
                },
                'sortable' => true,
                  'searchable' => true
            ],
            'email' => [
                'label' => 'Email',
                'func' => function ($value) {
                    return $value;
                },
                'sortable' => true,
                  'searchable' => true
            ],
            'telefono' => [
                'label' => 'Telefono',
                'func' => function ($value) {
                    return $value;
                },
                'sortable' => true,
                  'searchable' => true
            ],
            'problema' => [
                'label' => 'Problema',
                'func' => function ($value) {
                    return $value;
                },
                'sortable' => true,
                'searchable' => true
            ],
            'imagenes' => [
                'label' => 'Imagenes',
                'func' => function ($value) {
                    return $value;
                },
                'sortable' => false,
                'searchable' => false
            ],
            'lang' => [
                'label' => 'Lang',
                'func' => function ($value) {
                    return $value;
                },
                'sortable' => true,
                'searchable' => true
            ]


        ];
    }

    public function config()
    {
        $this->sortColumn = 'id';
        $this->sortDirection = 'desc';
        $this->itmesPerPage = 10;
        $this->visibleColumns = [

            // 'id_pedidos',
            'nombre',
            'email',
            'telefono',
            'problema',
            // 'imagenes',
            'lang',
            // 'created_at',
            // 'updated_at'

        ];

        $this->create = true;
        $this->export = true;
        $this->actions = [
            'Edit' => [
                'icon' => 'bx bx-edit',
                'params' => ['id'],
                'event' => 'edit',
                'isModal' => false,
                'route' => 'pedidos.edit'
            ],
        ];
        $this->createAction = [
            'label' => 'Crear nuevo pedido',
            'icon' => 'bx bx-plus',
            'event' => 'create',
            'isModal' => true

        ];
    }

}

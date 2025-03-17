<?php

namespace Modules\Contacproduct\Livewire;


use App\Models\Orders;
use App\Models\StatusTranslation;
use Illuminate\Support\Facades\Auth;
use Nicotc\Datatable\Http\Livewire\Datatable;

class ContactDatatable extends Datatable
{
    public $dropdown = false;

    public $statusTranslation;

    protected $listeners = ['deleteUserConfirmed', 'notify'];

    public function buildQuery()
    {

        $query = Orders::select(
            'orders.id',
            'item',
            'id_orders',
            'orders.name',
            'email',
            'phone',
            'details',
            'orders.langs_id',
            'fv_form_id',
            'orders.status_id',
            'orders.created_at',
            'orders.updated_at'
        )
            ->with('status');

        if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('Super Admin')) {

        } else {
            $userLang = Auth::user()->langs_id;
            $query = $query->where('orders.langs_id', $userLang);

        }

        if ($this->search['id'] ?? false) {
            $query = $query->where('orders.id', $this->search['id']);
        }

        if ($this->search['item'] ?? false) {
            $query = $query->where('orders.item', 'like', '%'.$this->search['item'].'%');
        }

        if ($this->search['name'] ?? false) {
            $query = $query->where('orders.name', 'like', '%'.$this->search['name'].'%');
        }

        if ($this->search['email'] ?? false) {
            $query = $query->where('orders', 'like', '%'.$this->search['email'].'%');
        }

        if ($this->search['phone'] ?? false) {
            $query = $query->where('orders', 'like', '%'.$this->search['phone'].'%');
        }

        if ($this->search['details'] ?? false) {
            $query = $query->where('details', 'like', '%'.$this->search['details'].'%');
        }

        // if ($this->search['images'] ?? false) {
        //     $query = $query->where('images', 'like', '%'.$this->search['images'].'%');
        // }

        if ($this->search['status'] ?? false) {
            $query = $query->where('status_traducciones.nombre', 'like', '%'.$this->search['status'].'%');
        }

        if ($this->search['lang'] ?? false) {
            $query = $query->where('lang', 'like', '%'.$this->search['lang'].'%');
        }

        $query = $query->orderBy($this->sortColumn, $this->sortDirection);

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
            'status' => [
                'label' => 'status',
                'func' => function ($value) {

                    $status = $this->statusTranslation[$value['id']];
                    $color = $value['color'];

                    return "<p style='background-color: $color; color: white; padding: 5px; border-radius: 5px;'>$status</p>";

                },
                'sortable' => true,
                'searchable' => true,
            ],

            'id_orders' => [
                'label' => 'ID Pedidos',
                'func' => function ($value) {
                    return $value;
                },
                'sortable' => true,
                'searchable' => true,
            ],
            'item' => [
                'label' => 'Item',
                'func' => function ($value) {
                    return $value;
                },
                'sortable' => true,
                'searchable' => true,
            ],

            'name' => [
                'label' => 'Nombre',
                'func' => function ($value) {
                    return $value;
                },
                'sortable' => true,
                'searchable' => true,
            ],
            'email' => [
                'label' => 'Email',
                'func' => function ($value) {
                    return $value;
                },
                'sortable' => true,
                'searchable' => true,
            ],
            'phone' => [
                'label' => 'Telefono',
                'func' => function ($value) {
                    return $value;
                },
                'sortable' => true,
                'searchable' => true,
            ],
            'details' => [
                'label' => 'details',
                'func' => function ($value) {
                    return $value;
                },
                'sortable' => true,
                'searchable' => true,
            ],
            // 'imagenes' => [
            //     'label' => 'Imagenes',
            //     'func' => function ($value) {
            //         return $value;
            //     },
            //     'sortable' => false,
            //     'searchable' => false,
            // ],
            'lang_id' => [
                'label' => 'Lang',
                'func' => function ($value) {
                    return $value;
                },
                'sortable' => true,
                'searchable' => true,
            ],

        ];
    }

    public function config()
    {

        $this->statusTranslation = StatusTranslation::where('langs_id', Auth::user()->langs_id)
            ->pluck('name', 'status_id');

        $this->sortColumn = 'id';
        $this->sortDirection = 'desc';
        $this->itmesPerPage = 50;
        $this->visibleColumns = [

            // 'id_pedidos',
            'status',
            'item',
            'name',
            'email',
            'phone',
            'details',
            // 'imagenes',
            // 'lang',
            // 'created_at',
            // 'updated_at'

        ];

        $this->create = true;
        $this->export = true;
        $this->actions = [
            'Edit' => [
                'icon' => 'bx bx-edit',
                'params' => ['id'],
                'event' => 'editModal',
                'isModal' => false,
                'route' => 'contactproduct.edit',

            ],
            // 'Delete' => [
            //     'icon' => 'bx bx-trash',
            //     'params' => ['id'],
            //     'event' => 'deleteModal',
            //     'isModal' => true,

            // ],

        ];
        $this->createAction = [
            'label' => 'Create product',
            'icon' => 'bx bx-plus',
            'event' => 'createModal',
            'isModal' => true,

        ];


    }
}

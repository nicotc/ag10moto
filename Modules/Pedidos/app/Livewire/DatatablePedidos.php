<?php

namespace Modules\Pedidos\Livewire;

use App\Models\Repairs;
use App\Models\StatusTranslation;
use Illuminate\Support\Facades\Auth;
use Nicotc\Datatable\Http\Livewire\Datatable;

class DatatablePedidos extends Datatable
{
    public $dropdown = false;

    public $statusTranslation;

    protected $listeners = ['deleteUserConfirmed', 'notify'];

    public function buildQuery()
    {

        $query = Repairs::select(
            'repairs.id',
            'id_repairs',
            'repairs.name',
            'email',
            'phone',
            'details',
            'images',
            'repairs.langs_id',
            'fv_form_id',
            'repairs.status_id',
            'repairs.created_at',
            'repairs.updated_at'
        )
            ->with('status');

        if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('Super Admin')) {

        } else {
            $userLang = Auth::user()->langs_id;
            $query = $query->where('repairs.langs_id', $userLang);

        }

        if ($this->search['id'] ?? false) {
            $query = $query->where('repairs.id', $this->search['id']);
        }

        if ($this->search['name'] ?? false) {
            $query = $query->where('repairs.name', 'like', '%'.$this->search['name'].'%');
        }

        if ($this->search['email'] ?? false) {
            $query = $query->where('email', 'like', '%'.$this->search['email'].'%');
        }

        if ($this->search['phone'] ?? false) {
            $query = $query->where('phone', 'like', '%'.$this->search['phone'].'%');
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
            'id_repairs' => [
                'label' => 'ID Pedidos',
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
                'label' => 'Problema',
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
                'event' => 'edit',
                'isModal' => false,
                'route' => 'pedidos.edit',
            ],
        ];
        $this->createAction = [
            'label' => 'Crear nuevo pedido',
            'icon' => 'bx bx-plus',
            'event' => 'create',
            'isModal' => true,

        ];
    }
}

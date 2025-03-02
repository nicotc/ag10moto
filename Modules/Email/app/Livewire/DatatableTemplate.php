<?php

namespace Modules\Email\Livewire;

use App\Models\EmailTemplate;
use Nicotc\Datatable\Http\Livewire\Datatable;

class DatatableTemplate extends Datatable
{
    public $dropdown = true;

    protected $listeners = ['deleteConfirmed', 'notify'];

    public function buildQuery()
    {

        $query = EmailTemplate::select(
            'id',
            'model_name',
        );

        $query = $query->where(function ($query) {
            $query->where('model_name', 'like', '%'.$this->searchTerm.'%');
        });

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
            'model_name' => [
                'label' => 'Name',
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

    public function config()
    {
        $this->itmesPerPage = 10;
        $this->visibleColumns = [
            'id',
            'model_name',
        ];
        $this->create = true;
        $this->export = false;
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
                'event' => 'deleteModal',
            ],
        ];
        $this->createAction = [
            'label' => 'Create Template',
            'icon' => 'bx bx-plus',
            'event' => 'createModal',
            'isModal' => true,

        ];
    }
}

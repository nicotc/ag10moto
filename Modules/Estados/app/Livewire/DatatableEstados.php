<?php

namespace Modules\Estados\Livewire;

use App\Models\Status;
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
            'model_name',
            'name',
            'color',
            'email_template_id',
            'statusTranslation',
            'emailTemplate'
            // 'created_at',
            // 'updated_at',
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
                'event' => 'deleteModal',
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
            'model_name',
            'color',
            'email_template_id',
    )->with('emailTemplate')

            ->with('statusTranslation');

        // where funcion group
        $query->where(function ($query) {
            $query->where('model_name', 'like', '%'.$this->searchTerm.'%');
        });

        if ($this->search['model_name'] ?? false) {
            $query->where('model_name', 'like', '%'.$this->search['model_name'].'%');
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
            'model_name' => [
                'label' => 'Type',
                'func' => function ($value) {
                    return $value;
                },
                'sortable' => false,
                'searchable' => false,
            ],

            'color' => [
                'label' => 'Color',
                'func' => function ($value) {

                    return "<p style='background-color: $value; color: white; padding: 5px; border-radius: 5px;'>$value</p>";

                },
                'sortable' => false,
                'searchable' => false,
            ],
            'emailTemplate' => [
                'label' => 'Email',
                'func' => function ($value) {
                   if($value != null){
                    return $value->name;
                   }else{
                    return 'No email';
                   }

                },
                'sortable' => true,
                'searchable' => true,
            ],
            'statusTranslation' => [
                'label' => 'Name',
                'func' => function ($value) {
                    $p = '';
                    foreach ($value as $item) {
                        $p .= '<b>'.getLagId($item->langs_id).'</b>: '.$item->name.'<br>';

                    }

                    return $p;
                },
                'sortable' => true,
                'searchable' => true,
            ],

            // 'emailTemplate' => [
            //     'label' => 'Email',
            //     'func' => function ($value) {
            //         return dump($value);

            //     },
            //     'sortable' => true,
            //     'searchable' => true,
            // ],

        ];
    }

    public function deleteConfirmed($id)
    {
        Status::find($id)->delete();
        $this->dispatch('notify', [
            'type' => 'success',
            'message' => 'Estado eliminado',
        ]);
    }
}
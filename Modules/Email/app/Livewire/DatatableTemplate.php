<?php

namespace Modules\Email\Livewire;

use App\Models\EmailTemplate;
use App\Models\Lang;
use Nicotc\Datatable\Http\Livewire\Datatable;

class DatatableTemplate extends Datatable
{
    public $dropdown = true;

    protected $listeners = ['deleteConfirmed', 'notify'];

    public function buildQuery()
    {

        $query = EmailTemplate::select(
            'id',
            'name'
        );

        $query = $query->where(function ($query) {
            $query->where('name', 'like', '%'.$this->searchTerm.'%');
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
            'name' => [
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
        $langs = Lang::pluck('lang', 'id')->toArray();


        $this->itmesPerPage = 10;
        $this->visibleColumns = [
            'id',
            'name',
        ];
        $this->create = true;
        $this->export = false;



        $this->actions = [

            'rename' => [
                'icon' => 'bx bx-rename',
                'isModal' => true,
                'route' => 'email.template.rename',
                'params' => ['id'],
                'event' => 'renameModal',
            ],


            'edit' => [
                'icon' => 'edit',
                'isModal' => false,
                'route' => 'email.template.edit',
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


    public function deleteConfirmed($id)
    {
        EmailTemplate::find($id)->delete();
        $this->dispatch('notify', [
            'message' => 'Template deleted successfully',
            'type' => 'success',
        ]);
    }
}
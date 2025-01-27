<?php

namespace Modules\Email\Livewire;

use Livewire\Component;
use Modules\Email\Models\EmailTemplate;
use Nicotc\Datatable\Http\Livewire\Datatable;

class DatatableTemplate extends Datatable
{

    public $dropdown = true;
    
    protected $listeners = ['deleteConfirmed', 'notify'];

    public function buildQuery()
    {
        $query = EmailTemplate::select(
            'id',
            'name',
            'subject',
            'body',
            'created_at',
            'updated_at',
        );

        $query = $query->where(function ($query) {
            $query->where('name', 'like', '%' . $this->searchTerm . '%')
                ->orWhere('subject', 'like', '%' . $this->searchTerm . '%')
                ->orWhere('body', 'like', '%' . $this->searchTerm . '%');
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
                'searchable' => true
            ],
            'name' => [
                'label' => 'Name',
                'func' => function ($value) {
                    return $value;
                },
                'sortable' => true,
                'searchable' => true
            ],
            'subject' => [
                'label' => 'Subject',
                'func' => function ($value) {
                    return $value;
                },
                'sortable' => true,
                'searchable' => true
            ],
            'body' => [
                'label' => 'Body',
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
            ],
        ];
    }

    public function config()
    {
        $this->itmesPerPage = 10;
        $this->visibleColumns = [
            'id',
            'name',
            'subject',
            'body',
            'created_at',
            'updated_at',
        ];
        $this->create = true;
        $this->export = false;
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






}

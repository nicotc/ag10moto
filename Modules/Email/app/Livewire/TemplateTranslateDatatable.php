<?php

namespace Modules\Email\Livewire;


use App\Models\EmailTemplateTranslations;
use Nicotc\Datatable\Http\Livewire\Datatable;

class TemplateTranslateDatatable extends Datatable
{

    public $templateId;

    public $dropdown = true;

    protected $listeners = ['deleteConfirmed', 'notify'];

    public function buildQuery()
    {

        $query = EmailTemplateTranslations::select(
            'id',
            'langs_id',
            'subject',
            // 'body',

        );

        $query = $query->where(function ($query) {
            $query->where('subject', 'like', '%'.$this->searchTerm.'%');
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
            'subject' => [
                'label' => 'subject',
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
            'name',
        ];
        $this->create = true;
        $this->export = false;



        $this->actions = [

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
}
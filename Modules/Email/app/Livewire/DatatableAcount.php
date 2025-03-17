<?php

namespace Modules\Email\Livewire;

use App\Models\EmailConfig;
use Nicotc\Datatable\Http\Livewire\Datatable;

class DatatableAcount extends Datatable
{
    public $dropdown = true;

    protected $listeners = ['deleteConfirmed', 'notify'];

    public function buildQuery()
    {
        $query = EmailConfig::select(
            'id',
            'langs_id',
            'mail_host',
            'mail_port',
            'mail_username',
            'mail_password',
            'mail_encryption',
            'mail_from_address',
            'mail_from_name'
        );

        $query = $query->where(function ($query) {
            $query->where('mail_host', 'like', '%'.$this->searchTerm.'%')
                ->orWhere('mail_port', 'like', '%'.$this->searchTerm.'%')
                ->orWhere('mail_username', 'like', '%'.$this->searchTerm.'%')
                ->orWhere('mail_encryption', 'like', '%'.$this->searchTerm.'%')
                ->orWhere('mail_from_address', 'like', '%'.$this->searchTerm.'%')
                ->orWhere('mail_from_name', 'like', '%'.$this->searchTerm.'%');
        });

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
            'langs_id' => [
                'label' => 'Lang',
                'func' => function ($value) {
                    return getLagId($value);
                },
                'sortable' => true,
                'searchable' => true,
            ],
            'mail_host' => [
                'label' => 'Host',
                'func' => function ($value) {
                    return $value;
                },
                'sortable' => true,
                'searchable' => true,
            ],
            'mail_port' => [
                'label' => 'Port',
                'func' => function ($value) {
                    return $value;
                },
                'sortable' => true,
                'searchable' => true,
            ],
            'mail_username' => [
                'label' => 'Username',
                'func' => function ($value) {
                    return $value;
                },
                'sortable' => true,
                'searchable' => true,
            ],
            'mail_encryption' => [
                'label' => 'Encryption',
                'func' => function ($value) {
                    return $value;
                },
                'sortable' => true,
                'searchable' => true,
            ],
            'mail_from_address' => [
                'label' => 'From Address',
                'func' => function ($value) {
                    return $value;
                },
                'sortable' => true,
                'searchable' => true,
            ],
            'mail_from_name' => [
                'label' => 'From Name',
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
            'langs_id',
            'mail_host',
            'mail_port',
            'mail_username',
            'mail_encryption',
            'mail_from_address',
            'mail_from_name',
        ];

        $this->create = true;
        $this->export = false;
        $this->actions = [
            'edit' => [
                'icon' => 'edit',
                'isModal' => true,
                'params' => ['id'],
                'event' => 'edit',
            ],
            'delete' => [
                'icon' => 'trash',
                'isModal' => true,
                'params' => ['id'],
                'event' => 'delete',
            ],
        ];
        $this->createAction = [
            'label' => 'Create Account',
            'icon' => 'bx bx-plus',
            'event' => 'create',
            'isModal' => true,

        ];

    }

    public function deleteConfirmed($id)
    {
        $email = EmailConfig::find($id);
        $email->delete();
        $this->dispatch('notify', ['type' => 'success', 'message' => 'Email Configuration Deleted Successfully']);
    }
}

<?php

namespace Modules\Estados\Livewire;

use Livewire\Component;
use Modules\Idiomas\Models\Lang;

class EstadosEdit extends Component
{
    public $name;

    public $color;

    public $emails = [];

    public $email;

    public $idiomas = [];

    public $idioma = [];

    public function render()
    {
        // $this->emails = array_unique(EmailTemplate::pluck('name')->toArray());
        $this->idiomas = Lang::pluck('lang', 'id')->toArray();

        return view('estados::livewire.estados-edit');
    }
}
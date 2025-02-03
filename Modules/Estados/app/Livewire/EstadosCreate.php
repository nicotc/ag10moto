<?php

namespace Modules\Estados\Livewire;

use Livewire\Component;
use Modules\Idiomas\Models\Lang;
use Modules\Estados\Models\Status;
use Modules\Email\Models\EmailTemplate;

class EstadosCreate extends Component
{

    public $name;
    public $color;
    public $emails = [];
    public $idiomas = [];
    public $idioma = [];






    public function render()
    {
        $this->emails = array_unique(EmailTemplate::pluck('name')->toArray());
        $this->idiomas = Lang::pluck('lang', 'id')->toArray();






        return view('estados::livewire.estados-create');
    }

    public function create(){

        dd($this->idioma);

        $this->validate([
            'name' => 'required',
            'color' => 'required',
        ]);

        $estado = new Status();
        $estado->name = $this->name;
        $estado->color = $this->color;
        $estado->save();



        $this->reset();
        $this->emit('estadoCreated');
    }
}

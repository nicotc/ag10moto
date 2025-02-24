<?php

namespace Modules\Estados\Livewire;

use Livewire\Component;
use Modules\Idiomas\Models\Lang;
use Modules\Estados\Models\Status;
use Modules\Email\Models\EmailTemplate;
use Modules\Estados\Models\StatusTraducciones;

class EstadosCreate extends Component
{

    public $name;
    public $color;
    public $emails = [];
    public $email;
    public $idiomas = [];
    public $idioma = [];






    public function render()
    {
        $this->emails = array_unique(EmailTemplate::pluck('name')->toArray());
        $this->idiomas = Lang::pluck('lang', 'id')->toArray();






        return view('estados::livewire.estados-create');
    }

    public function create(){



        $this->validate([
            'name' => 'required',
            // 'color' => 'required',
        ]);

        $estado = new Status();
        $estado->name = $this->name;
        $estado->color = $this->color ?? 'primary';
        $estado->email = $this->email;
        $estado->save();


        foreach ($this->idioma as $key => $value) {


            StatusTraducciones::create([
                'type' => 'status',
                'status_id' => $estado->id,
                'langs_id' => $key,
                'nombre' => $value
            ]);
        }







        $this->reset();
        $this->dispatch('notify', [
            'type' => 'success',
            'message' => 'Estado creado correctamente'
        ]);
    }
}

<?php

namespace Modules\Estados\Livewire;

use App\Models\EmailTemplate;
use App\Models\Status;
use App\Models\StatusTranslation;
use Livewire\Component;
use Modules\Idiomas\Models\Lang;

class EstadosCreate extends Component
{
    public $type;

    public $color;

    public $emails = [];

    public $email;

    public $idiomas = [];

    public $idioma = [];

    public function render()
    {

        $this->emails = EmailTemplate::pluck('id', 'id')->toArray();

        $this->idiomas = Lang::pluck('lang', 'id')->toArray();

        return view('estados::livewire.estados-create');
    }

    public function create()
    {

        $this->validate([
            'type' => 'required',
            'color' => 'required',
        ]);

        $estado = new Status;
        $estado->model_name = $this->type;
        $estado->color = $this->color ?? '#000000';
        $estado->email_template_id = $this->email ?? null;
        $estado->save();

        foreach ($this->idioma as $key => $value) {

            StatusTranslation::create([
                'status_id' => $estado->id,
                'langs_id' => $key,
                'name' => $value,
            ]);
        }

        $this->reset();
        $this->dispatch('notify', [
            'type' => 'success',
            'message' => 'Estado creado correctamente',
        ]);
    }
}

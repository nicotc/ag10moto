<?php

namespace Modules\Estados\Livewire;

use App\Models\Status;
use Livewire\Component;
use App\Models\EmailTemplate;
use Modules\Idiomas\Models\Lang;

class EstadosEdit extends Component
{
    public $name;

    public $color;

    public $emails = [];

    public $email;

    public $type;

    public $idiomas = [];

    public $idioma = [];

    protected $listeners = ['editModal'];

    public function editModal($id)
    {

        $estado = Status::find($id);


        $this->type = $estado->model_name;
        $this->color = $estado->color;
        $this->email = $estado->email_template_id;



        $this->idioma = $estado->statusTranslation->pluck('name', 'langs_id')->toArray();


        foreach ($this->idioma as $key => $value) {
            $this->idiomas[$key] = $value;
        }

        // dd($this->idioma);

    }


    public function render()
    {
        $this->emails = EmailTemplate::pluck('name', 'id')->toArray();

        $this->idiomas = Lang::pluck('lang', 'id')->toArray();

        return view('estados::livewire.estados-edit');
    }
}

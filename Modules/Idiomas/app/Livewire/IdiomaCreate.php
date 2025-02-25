<?php

namespace Modules\Idiomas\Livewire;

use Livewire\Component;
use Modules\Idiomas\Models\Lang;

class IdiomaCreate extends Component
{
    public $lang;

    public $iso;

    public function render()
    {
        return view('idiomas::livewire.idioma-create');
    }

    public function create()
    {
        $this->validate([
            'lang' => 'required',
            'iso' => 'required',
        ]);

        Lang::create([
            'lang' => $this->lang,
            'iso' => $this->iso,
        ]);

        $this->dispatch('notify', [
            'type' => 'success',
            'message' => 'Idioma creado correctamente',
        ]);
    }
}

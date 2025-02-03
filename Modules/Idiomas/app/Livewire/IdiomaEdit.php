<?php

namespace Modules\Idiomas\Livewire;

use Livewire\Component;
use Modules\Idiomas\Models\Lang;



class IdiomaEdit extends Component
{

    public $lang;

    public $iso;

    public $lang_id;
    
    protected $listeners = ['editModal'];

    public function editModal($id)
    {

        $this->lang_id = $id;
        $lang = Lang::find($id);
        $this->lang = $lang->lang;
        $this->iso = $lang->iso;

    }


    public function render()
    {
        return view('idiomas::livewire.idioma-edit');
    }


    public function update()
    {
        $id = $this->lang_id;
        $this->validate([
            'lang' => 'required',
            'iso' => 'required'
        ]);

        $lang = Lang::find($id);


        $lang->update([
            'lang' => $this->lang,
            'iso' => $this->iso
        ]);

        $this->dispatch('notify', [
            'type' => 'success',
            'message' => 'Idioma actualizado correctamente'
        ]);
    }
}

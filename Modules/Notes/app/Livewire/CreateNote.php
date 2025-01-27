<?php

namespace Modules\Notes\Livewire;

use Livewire\Component;
use Modules\Notes\Models\Notes;

class CreateNote extends Component
{
    public $pedido;
    public $note;

    public function render()
    {
        return view('notes::livewire.create-note');
    }


    public function store()
    {
        // dd($this->pedido);

        $this->validate([
            'note' => 'required'
        ]);

       Notes::create([
            'pedido_id' => $this->pedido,
            'note' => $this->note,
            'created_by' => auth()->id(),
            'status' => 1
        ]);

        $this->note = '';
        $this->dispatch('notify', [
            'message' => 'Note created successfully',
            'type' => 'success'
        ]);

    }
}

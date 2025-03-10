<?php

namespace Modules\Notes\Livewire;

use Livewire\Component;
use Modules\Notes\Models\Notes;

class CreateNote extends Component
{
    public $pedido;

    public $note;

    public $model;

    public function render()
    {
        return view('notes::livewire.create-note');
    }

    public function store()
    {
        // dd($this->pedido);

        $this->validate([
            'note' => 'required',
        ]);

        // dd($this->pedido, $this->model, $this->note);
        Notes::create([
            'model_id' => $this->pedido,
            'model_name' => $this->model,
            'note' => $this->note,
            'user_id' => auth()->id(),
            'status' => 1,
        ]);



        $this->note = '';
        $this->dispatch('notify', [
            'message' => 'Note created successfully',
            'type' => 'success',
        ]);

    }
}
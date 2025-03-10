<?php

namespace Modules\Notes\Livewire;

use Livewire\Component;
use Modules\Notes\Models\Notes;

class NoteList extends Component
{
    public $pedido;

    public $notes;

    public $model;

    protected $listeners = ['notify', 'deleteNoteConfirmed'];

    public function notify($message)
    {
        $this->notes = Notes::select(
            'notes.id',
            'notes.model_id',
            'notes.model_name',
            'notes.note',
            'notes.user_id',
            'notes.status',
            'notes.created_at'
            )
            ->where('model_id', $this->pedido)
            ->where('model_name', $this->model)
            ->orderBy('notes.id', 'desc')
            ->get();

    }

    public function mount($pedido)
    {

        // dd($pedido, $this->model);

        $this->notes = Notes::select(
            'notes.id',
            'notes.model_id',
            'notes.note',
            'notes.user_id',
            'notes.status',
            'notes.created_at'
            )
            ->where('model_id', $this->pedido)
            ->where('model_name', $this->model)
            ->orderBy('notes.id', 'desc')
            ->get();
    }

    public function render()
    {
        return view('notes::livewire.note-list');
    }

    public function editNoteModal($noteId)
    {
        $this->dispatch('openEditNoteModal', $noteId);
    }

    // public function deleteNote($noteId)
    // {

    //     $this->dispatch('deleteNotes', ['id' => $noteId]);

    // }

    public function deleteNoteConfirmed($noteId)
    {
        Notes::find($noteId)->delete();
        $this->dispatch('notify', [
            'message' => 'Note deleted successfully',
            'type' => 'success',
        ]);
    }
}

<?php

namespace Modules\Notes\Livewire;

use Livewire\Component;

use Modules\Notes\Models\Notes;

class NoteList extends Component
{
    public $pedido;
    public $notes;

    protected $listeners = ['notify', 'deleteNoteConfirmed'];

    public function notify($message)
    {
        $this->notes = Notes::select('notes.id', 'notes.pedido_id', 'notes.note', 'notes.created_by', 'notes.status', 'notes.created_at' )
        ->where('pedido_id', $this->pedido)
        ->orderBy('notes.id', 'desc')
        ->get();

    }


    public function mount($pedido)
    {

        $this->notes = Notes::select('notes.id', 'notes.pedido_id', 'notes.note', 'notes.created_by', 'notes.status', 'notes.created_at' )
        ->where('pedido_id', $this->pedido)
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
            'type' => 'success'
        ]);
    }
}

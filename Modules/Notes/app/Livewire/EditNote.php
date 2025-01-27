<?php

namespace Modules\Notes\Livewire;

use Livewire\Component;
use Modules\Notes\Models\Notes;

class EditNote extends Component
{

    public $noteId;
    public $note;

    protected $listeners = ['openEditNoteModal'];

    public function openEditNoteModal($noteId)
    {
        $this->noteId = $noteId;
        $note = Notes::find($noteId);
        $this->note = $note->note;
    }

    public function render()
    {
        return view('notes::livewire.edit-note');
    }

    public function update()
    {
        $this->validate([
            'note' => 'required'
        ]);

        Notes::find($this->noteId)->update([
            'note' => $this->note
        ]);

        $this->dispatch('notify', [
            'message' => 'Note updated successfully',
            'type' => 'success'
        ]);
    }
}

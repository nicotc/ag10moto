<?php

namespace Modules\Notes\Livewire;

use Livewire\Component;

class NoteList extends Component
{
    public function render()
    {
        return view('notes::livewire.note-list');
    }
}

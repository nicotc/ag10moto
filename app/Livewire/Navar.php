<?php

namespace App\Livewire;

use Livewire\Component;

class Navar extends Component
{

    public $full_name;
    public $user_name;
    public $pofile_photo_path;

    protected $listeners = ['refresh-user' => '$refresh'];


    public function mount()
    {
        $this->full_name = auth()->user()->full_name;
        $this->user_name = auth()->user()->user_name;
        $this->pofile_photo_path = auth()->user()->profile_photo_path;
    }




    public function render()
    {
        return view('livewire.navar');
    }
}

<?php

declare(strict_types=1);

namespace App\Livewire;

use Illuminate\Support\Str;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Modelable;
use Livewire\Component;

class QuillEdit extends Component
{
    protected $listeners = ['valueUpdated' => 'updatedValue'];

    #[Modelable]
    public ?string $value = '';

    #[Locked]
    public string $quillId;

    public string $theme;

    public function mount(string $theme = 'snow'): void
    {
        $this->theme = $theme;
        $this->quillId = 'ql-editor-'.Str::uuid()->toString();
    }

    public function updatedValue($value): void
    {


        $this->value = $value;
    }

    public function render()
    {
        return view('livewire.quill-edit');
    }
}
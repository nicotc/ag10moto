<?php

namespace Modules\Email\Livewire\Template;

use Livewire\Component;
use Modules\Idiomas\Models\Lang;

class Create extends Component
{
    public $language;

    public $name;

    public $subject;

    public $body;

    public $langs = [];

    public $lang;

    public function render()
    {
        $this->langs = Lang::pluck('lang', 'id')->toArray();

        return view('email::livewire.template.create');
    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'subject' => 'required',
            'body' => 'required',
            'lang' => 'required',
        ]);

        // EmailTemplate::create([
        //     'name' => $this->name,
        //     'subject' => $this->subject,
        //     'body' => $this->body,
        //     'langs_id' => $this->lang,
        // ]);

        $this->dispatch('notify', [
            'message' => 'Template created successfully',
            'type' => 'success',
        ]);

        $this->reset();

    }
}

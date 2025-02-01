<?php

namespace Modules\Email\Livewire\Template;

use Livewire\Component;
use Modules\Email\Models\EmailTemplate;

class Create extends Component
{

    public $language;

    public $name;

    public $subject;

    public $body;

    public function render()
    {
        return view('email::livewire.template.create');
    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'subject' => 'required',
            'body' => 'required',
            'language' => 'required',
        ]);

        EmailTemplate::create([
            'name' => $this->name,
            'subject' => $this->subject,
            'body' => $this->body,
            'language' => $this->language,
        ]);

        $this->dispatch('notify', [
            'message' => 'Template created successfully',
            'type' => 'success'
        ]);


    }
}

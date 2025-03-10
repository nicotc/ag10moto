<?php

namespace Modules\Email\Livewire\Template;

use Livewire\Component;
use Modules\Idiomas\Models\Lang;

class Edit extends Component
{
    public $templateId;

    public $langs = [];

    public $lang;

    public $name;

    public $subject;

    public $body;

    public $content;

    protected $listeners = ['editModal'];

    public function editModal($id)
    {


        $this->templateId = $id;

        $this->langs = Lang::pluck('lang', 'id')->toArray();

        $this->resetValidation();

        // $template = EmailTemplate::find($id);

        // $this->name = $template->name;
        // $this->subject = $template->subject;
        // $this->body = $template->body;
        // $this->lang = $template->langs_id;

        $this->dispatch('contentUpdated', $this->body);

    }

    public function render()
    {
        return view('email::livewire.template.edit');
    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'subject' => 'required',
            'body' => 'required',
            'lang' => 'required',
        ]);

        // $template = EmailTemplate::find($this->templateId);

        // $template->update([
        //     'name' => $this->name,
        //     'subject' => $this->subject,
        //     'body' => $this->body,
        //     'langs_id' => $this->lang,
        // ]);

        $this->dispatch('notify', [
            'message' => 'Template created successfully',
            'type' => 'success',
        ]);

    }
}
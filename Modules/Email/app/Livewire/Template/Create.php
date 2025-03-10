<?php

namespace Modules\Email\Livewire\Template;

use App\Models\EmailTemplateTranslations;
use Livewire\Component;
use Modules\Idiomas\Models\Lang;

class Create extends Component
{

    public $templateId;
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
            'subject' => 'required',
            'body' => 'required',
            'lang' => 'required',
        ]);

        EmailTemplateTranslations::create([
            'email_template_id' => $this->templateId,
            'langs_id' => $this->lang,
            'name' => $this->name,
            'subject' => $this->subject,
            'body' => $this->body,
        ]);

        $this->dispatch('notify', [
            'message' => 'Template created successfully',
            'type' => 'success',
        ]);

        $this->reset();

    }
}
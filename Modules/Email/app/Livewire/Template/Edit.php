<?php

namespace Modules\Email\Livewire\Template;

use Livewire\Component;
use Modules\Idiomas\Models\Lang;
use App\Models\EmailTemplateTranslations;

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

        $this->resetValidation();
        $this->templateId = $id;
        $this->langs = Lang::pluck('lang', 'id')->toArray();
         $template = EmailTemplateTranslations::where('id', $this->templateId)->first();


        $this->subject = $template->subject;
        $this->body = $template->body;
        $this->content = $template->body;
        $this->lang = $template->langs_id;


        $this->dispatch('contentUpdated', $this->content);

    }

    public function render()
    {
        return view('email::livewire.template.edit');
    }

    public function save()
    {
        $this->validate([
            'subject' => 'required',
            'content' => 'required',
            'lang' => 'required',
        ]);

        $template = EmailTemplateTranslations::where('id', $this->templateId)->first();

        $template->subject = $this->subject;
        $template->body = $this->content;
        $template->langs_id = $this->lang;

        $template->save();



        $this->dispatch('notify', [
            'message' => 'Template created successfully',
            'type' => 'success',
        ]);

    }
}
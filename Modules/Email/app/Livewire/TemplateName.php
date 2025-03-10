<?php

namespace Modules\Email\Livewire;

use Livewire\Component;
use App\Models\EmailTemplate;

class TemplateName extends Component
{

    public $model_name;
    public $name;


    public function render()
    {
        return view('email::livewire.template-name');
    }


    public function save()
    {
        $this->validate([
            'name' => 'required|unique:email_templates,name',
        ]);

        EmailTemplate::create([
            'name' => $this->name,
        ]);

        $this->dispatch('notify', [
            'message' => 'Template created successfully',
            'type' => 'success',
        ]);

        $this->reset();

    }
}
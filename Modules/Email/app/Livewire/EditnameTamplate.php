<?php

namespace Modules\Email\Livewire;

use Livewire\Component;
use App\Models\EmailTemplate;

class EditnameTamplate extends Component
{
    public $idTemplate;
    public $name;

    protected $listeners = ['renameModal'];

    public function renameModal($id)
    {
        $this->idTemplate = $id;
        $this->name = EmailTemplate::find($id)->name;
    }

    public function save()
    {
        //  validate the name field to be required and unique in the email_templates table but not in the current record


        $this->validate([
            'name' => 'required|unique:email_templates,name,'.$this->idTemplate,
        ]);

        $template = EmailTemplate::find($this->idTemplate);
        $template->name = $this->name;
        $template->save();

        $this->dispatch('notify', [
            'message' => 'Template name updated successfully',
            'type' => 'success',
        ]);

        $this->reset();
    }



    public function render()
    {
        return view('email::livewire.editname-tamplate');
    }
}

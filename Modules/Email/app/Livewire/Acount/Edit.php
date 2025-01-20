<?php

namespace Modules\Email\Livewire\Acount;

use Livewire\Component;
use Modules\Email\Models\EmailConfiguration;

class Edit extends Component
{
    public $mail_id;
    public $mail_host;
    public $mail_port;
    public $mail_username;
    public $mail_password;
    public $mail_encryption;
    public $mail_from_address;
    public $mail_from_name;

    protected $listeners = ['edit'];

public function edit($id)
    {


        $this->resetValidation();



        $email = EmailConfiguration::find($id);

        $this->mail_id = $email->id;

        $this->mail_host = $email->mail_host;

        $this->mail_port = $email->mail_port;
        $this->mail_username = $email->mail_username;


        $this->mail_encryption = $email->mail_encryption;
        $this->mail_from_address = $email->mail_from_address;
        $this->mail_from_name = $email->mail_from_name;


        $this->mail_password = $email->mail_password;




    }

public function create(){

        $this->validate([
            'mail_host' => 'required',
            'mail_port' => 'required',
            'mail_username' => 'required',
            'mail_password' => 'required',
            'mail_encryption' => 'required',
            'mail_from_address' => 'required',
            'mail_from_name' => 'required',
        ]);

        $email = EmailConfiguration::find($this->mail_id);

        $email->mail_host = $this->mail_host;
        $email->mail_port = $this->mail_port;
        $email->mail_username = $this->mail_username;
        $email->mail_password = $this->mail_password;
        $email->mail_encryption = $this->mail_encryption;
        $email->mail_from_address = $this->mail_from_address;
        $email->mail_from_name = $this->mail_from_name;

        $email->save();



       $this->dispatch('notify', ['type' => 'success', 'message' => 'Email Configuration Updated Successfully']);




}


    public function render()
    {
        return view('email::livewire.acount.edit');
    }


    
}

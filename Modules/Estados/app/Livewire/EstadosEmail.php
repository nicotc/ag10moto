<?php

namespace Modules\Estados\Livewire;

use Livewire\Component;
use App\Models\EstadosProductos;
use App\Models\Pedidos;
use Modules\Idiomas\Models\Lang;
use Modules\Estados\Models\Status;
use Modules\Email\Models\EmailTemplate;
use Modules\Email\Http\Controllers\EmailController;
use Modules\Email\Models\EmailConfiguration;

class EstadosEmail extends Component
{
    public $estados;
    public $content;
    public $selectedEstado;
    public $subject;
    public $pedido;




    protected $listeners = ['contenidoUpdated'];


    public function contenidoUpdated($content = null)
    {
      // Asegúrate de que $content sea un string y no un array o objeto
        if (is_string($content)) {
            $this->content = $content;
        } else {
            // Si no es un string, intenta convertirlo
            $this->content = (string) $content;
        }
    }

    public function mount()
    {


        $lang  = Pedidos::find($this->pedido)->lang;
        $idLang = Lang::where('iso', $lang)->first()->id;


        $estados = Status::join('status_traducciones', 'statuses.id', '=', 'status_traducciones.status_id')

        ->join('langs', 'status_traducciones.langs_id', '=', 'langs.id')
        ->where('langs_id', $idLang)
        ->where('name', 'Pedido')
        ->pluck('status_traducciones.nombre', 'statuses.id')->toArray();


        $this->estados = $estados;

    }


    public function updatedSelectedEstado()
    {



       $lang = Pedidos::find($this->pedido)->lang;
       $idLang = Lang::where('iso', $lang)->first()->id;




    //    dd($this->selectedEstado, $idLang);

        $EstatusName = Status::find($this->selectedEstado);
            if(!$EstatusName){
            $this->dispatch('contentUpdated', "");
                $this->dispatch('notify',
                [
                    'type' => 'error',
                    'message' => 'No se encontró el estado'
                ]);
                return;
            }
        $EstatusName =  $EstatusName->email;

        $email = EmailTemplate::where('name', $EstatusName)
        ->where('langs_id', $idLang)
        ->first();


        // Dd($email->body);
        if ($email) {
            $emailx =  $email->body;
            $this->subject = $email->subject;
        } else {
            $emailx = "";
            $this->subject = "";
        }

        $this->dispatch('contentUpdated', $emailx);
    }




    public function sendEmail()
    {


        if($this->selectedEstado != 0){

            EstadosProductos::create([
                'type' => 'email',
                'estado_id' => $this->selectedEstado,
                'producto_id' =>  $this->pedido,
                'user_id' => auth()->user()->id,
                'email' => $this->content
            ]);

            $this->dispatch('notify', ['type' => 'success',  'message' => 'Estado guardado']);


            if($this->content != "" && $this->subject != ""){
                $pedido = Pedidos::find($this->pedido);
                $lang = $pedido->lang;
                $idLang = Lang::where('iso', $lang)->first()->id;
                $emailConfigId = EmailConfiguration::where('langs_id',  $idLang )->first()->id;
                $emailController = app(EmailController::class);


                try{
                    $emailController->sendEmail($emailConfigId, $pedido->email, $this->subject, $this->content);

                }catch(\Exception $e){
                    $this->dispatch('notify', ['type' => 'error',  'message' => $e->getMessage()]);
                }

                $this->dispatch('notify',
                ['type' => 'success',  'message' => 'Email enviado']);



            }



        }else{
            $this->dispatch('notify', ['type' => 'error',  'message' => "Estado no valido"]);

        }


        //



        // $this->dispatch('notify', ['type' => 'success',  'message' => 'Email enviado']);
    }

    public function render()
    {
        // $this->content = "";
        return view('estados::livewire.estados-email');
    }
}

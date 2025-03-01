<?php

namespace Modules\Estados\Livewire;

use App\Models\ProductStates;
use App\Models\Otros;
use App\Models\Pedidos;
use Livewire\Component;
use Modules\Email\Http\Controllers\EmailController;
use Modules\Email\Models\EmailConfiguration;

use Modules\Estados\Models\Status;
use Modules\Idiomas\Models\Lang;

class EstadosEmail extends Component
{
    public $estados;

    public $content;

    public $selectedEstado;

    public $subject;

    public $pedido;

    public $model;

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


        $lang = Pedidos::find($this->pedido)->lang;

        $idLang = Lang::where('iso', $lang)->first();
        if ($idLang) {
            $idLang = $idLang->id;
        } else {
            $idLang = 1;
        }

        if ($this->model == 'pedido') {
            $NAME = 'Pedido';
        } else {
            $NAME = 'Producto';
        }

        $estados = Status::join('status_traducciones', 'statuses.id', '=', 'status_traducciones.status_id')
            ->join('langs', 'status_traducciones.langs_id', '=', 'langs.id')
            ->where('langs_id', $idLang)
            ->where('name', $NAME)
            ->where('status_traducciones.type', $NAME)
            ->pluck('status_traducciones.nombre', 'statuses.id')->toArray();

        $this->estados = $estados;

    }

    public function updatedSelectedEstado()
    {

        if($this->model == 'pedido'){
            $lang = Pedidos::find($this->pedido)->lang;
        }else{
            $lang = Otros::find($this->pedido)->lang;
        }
        $lang = Pedidos::find($this->pedido)->lang;
        $idLang = Lang::where('iso', $lang)->first();

        if($idLang){
            $idLang = $idLang->id;
        }else{
            $idLang = 1;
        }




        //    dd($this->selectedEstado, $idLang);

        $EstatusName = Status::find($this->selectedEstado);


        if (! $EstatusName) {
            $this->dispatch('contentUpdated', '');
            $this->dispatch('notify',
                [
                    'type' => 'error',
                    'message' => 'No se encontró el estado',
                ]);

            return;
        }
        $EstatusName = $EstatusName->email;

        // // $email = EmailTemplate::where('name', $EstatusName)
        // //     ->where('langs_id', $idLang)
        // //     ->first();



        // if ($email) {
        //     $emailx = $email->body;
        //     $this->subject = $email->subject;
        // } else {
        //     $emailx = '';
        //     $this->subject = '';
        // }

        $this->dispatch('contentUpdated', $emailx);
    }

    public function sendEmail()
    {

        if ($this->selectedEstado != 0) {

            ProductStates::create([
                'type' => $this->model,
                'estado_id' => $this->selectedEstado,
                'producto_id' => $this->pedido,
                'user_id' => auth()->user()->id,
                'email' => $this->content ?? '',
            ]);

            if($this->model == 'pedido'){
                // dd($this->pedido, $this->selectedEstado);
                $pedido = Pedidos::find($this->pedido);
                $pedido->status = $this->selectedEstado;
                $pedido->save();
            }else{
                $pedido = Otros::find($this->pedido);
                $pedido->status = $this->selectedEstado;
                $pedido->save();
            }



            $this->dispatch('notify', ['type' => 'success',  'message' => 'Estado guardado']);

            if ($this->content != '' && $this->subject != '') {
                $pedido = Pedidos::find($this->pedido);
                $lang = $pedido->lang;
                $idLang = Lang::where('iso', $lang)->first();
                if ($idLang) {
                    $idLang = $idLang->id;
                } else {
                    $idLang = 1;
                }
                $emailConfigId = EmailConfiguration::where('langs_id', $idLang)->first()->id;
                $emailController = app(EmailController::class);

                try {
                    $emailController->sendEmail($emailConfigId, $pedido->email, $this->subject, $this->content);

                } catch (\Exception $e) {
                    $this->dispatch('notify', ['type' => 'error',  'message' => $e->getMessage()]);
                }

                $this->dispatch('notify',
                    ['type' => 'success',  'message' => 'Email enviado']);

            }

        } else {
            $this->dispatch('notify', ['type' => 'error',  'message' => 'Estado no valido']);

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
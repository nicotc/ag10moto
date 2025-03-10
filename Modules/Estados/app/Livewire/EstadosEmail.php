<?php

namespace Modules\Estados\Livewire;

use App\Models\Otros;
use App\Models\Orders;
use App\Models\Status;
use App\Models\Pedidos;
use App\Models\Repairs;
use Livewire\Component;
use App\Models\EmailConfig;
use App\Models\historyStatus;
use App\Models\ProductStates;
use App\Models\EmailTemplateTranslations;
use Modules\Email\Models\EmailConfiguration;
use Modules\Email\Http\Controllers\EmailController;


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

        if($this->model == 'Repairs'){
            $pedido =  Repairs::find($this->pedido);
        }else{
            $pedido =  Orders::find($this->pedido);
        }




        $estados = Status::select(
            'status_translations.name',
            'status_translations.langs_id',
            'statuses.model_name',
            'statuses.id'
        )
        ->join('status_translations', 'statuses.id', '=', 'status_translations.status_id')
        ->where('model_name', $this->model)
        ->where('status_translations.langs_id', $pedido->langs_id)
        ->pluck('name', 'id');



        $this->estados = $estados;



    }

    public function updatedSelectedEstado()
    {

        if($this->model == 'Repairs'){
            $pedido =  Repairs::find($this->pedido);
        }else{
            $pedido =  Orders::find($this->pedido);
        }



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

if($EstatusName->email_template_id != null && $EstatusName->email_template_id != 0){



    $emailx = EmailTemplateTranslations::where('email_template_id', $EstatusName->email_template_id)->where('langs_id', $pedido->langs_id)->first();

    // "subject" => "Subject"
    // "body" => "<p>assdas</p>"


    if($emailx){
        $body = $emailx->body;
        $subject = $emailx->subject;
    }else{
        $body = null;
        $subject = null;
    }


}else{
    $emailx = null;

}
    $this->content = $body ?? '';
    $this->subject = $subject ?? '';
    $this->dispatch('contentUpdated', $this->content);
    }

    public function sendEmail()
    {

        // integer
    $estadoSave = (int) $this->selectedEstado;



        if ( $estadoSave != 0) {

            // ProductStates::create([
            //     'type' => $this->model,
            //     'estado_id' => $this->selectedEstado,
            //     'producto_id' => $this->pedido,
            //     'user_id' => auth()->user()->id,
            //     'email' => $this->content ?? '',
            // ]);



            if ($this->model == 'Repairs') {
                // dd($this->pedido, $this->selectedEstado);
                $pedido = Repairs::find($this->pedido);
                $pedido->status_id =  $estadoSave;
                $pedido->save();


            } else {
                $pedido = Orders::find($this->pedido);
                $pedido->status_id =  $estadoSave;
                $pedido->save();

            }

            $this->dispatch('notify', ['type' => 'success',  'message' => 'Estado guardado']);

            if ($this->content != '' && $this->subject != '') {
                $emailConfigId = EmailConfig::where('langs_id', $pedido->langs_id)
                ->first()->id;

                $emailController = app(EmailController::class);

                try {
                    $emailController->sendEmail($emailConfigId, $pedido->email, $this->subject, $this->content);

                } catch (\Exception $e) {
                    $this->dispatch('notify', ['type' => 'error',  'message' => $e->getMessage()]);
                }

                $this->dispatch('notify',
                    ['type' => 'success',  'message' => 'Email enviado']);
            }

 
            $historico = historyStatus::create([
                'model_id' => $this->pedido,
                'model_name' => $this->model,
                'status' => $estadoSave,
                'user_id' => auth()->user()->id,
                'email' => $this->content ?? '',
            ]);

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
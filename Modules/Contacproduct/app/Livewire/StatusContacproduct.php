<?php

namespace Modules\Contacproduct\Livewire;


use Livewire\Component;
use App\Models\historyStatus;


class StatusContacproduct extends Component
{
    public $pedido;

    public $estados;

    public function mount($pedido)
    {


        $historico = historyStatus::
        where('model_id', $pedido->id)
        ->where('model_name', 'Orders')
        ->orderBy('id', 'desc')
        ->get();


    $this->estados = $historico;




    }

    public function render()
    {
        return view('contacproduct::livewire.status-contacproduct');
    }
}
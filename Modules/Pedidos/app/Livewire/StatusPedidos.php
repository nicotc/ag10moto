<?php

namespace Modules\Pedidos\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\historyStatus;
use App\Models\ProductStates;
use Modules\Idiomas\Models\Lang;

class StatusPedidos extends Component
{
    public $pedido;

    public $estados;

    public function mount($pedido)
    {



        $historico = historyStatus::
        where('model_id', $pedido->id)
        ->where('model_name', 'Repairs')
        ->orderBy('id', 'desc')
        ->get();


    $this->estados = $historico;

    }

    public function render()
    {
        return view('pedidos::livewire.status-pedidos');
    }
}

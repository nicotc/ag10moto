<?php

namespace Modules\Pedidos\Livewire;

use App\Models\EstadosProductos;
use Carbon\Carbon;
use Livewire\Component;
use Modules\Idiomas\Models\Lang;

class StatusPedidos extends Component
{
    public $pedido;

    public $estados;

    public function mount($pedido)
    {

        // carbon para formatear la fecha de creacion
        Carbon::setLocale('es');
        $carbon = Carbon::parse($pedido->created_at)->format('d/m/Y H:i:s');

        $estado[] = [
            'create' => $carbon,
            'estado' => 'Inicial',
        ];

        // dd(EstadosProductos::get());
        $estados = EstadosProductos::where('producto_id', $pedido->id)
            ->where('type', 'pedido')
            ->get();

        $lang = $pedido->lang;

        $idLang = Lang::where('iso', $lang)->first()->id;

        foreach ($estados as $key => $value) {
            Carbon::setLocale('es');
            $carbon = Carbon::parse($value->created_at)->format('d/m/Y H:i:s');

            $estado[] = [
                'create' => $carbon,
                'estado' => getEstado($value->estado_id, $idLang),
                'user' => $value->user->first_name.' '.$value->user->last_name,
                // 'email' => $value->email
            ];
        }

        $this->estados = $estado;

    }

    public function render()
    {
        return view('pedidos::livewire.status-pedidos');
    }
}
<?php

namespace Modules\Contacproduct\Livewire;

use App\Models\ProductStates;
use Carbon\Carbon;
use Livewire\Component;
use Modules\Idiomas\Models\Lang;

class StatusContacproduct extends Component
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
            'estado' => 'Pendiente',
        ];

        // dd(ProductStates::get());
        $estados = ProductStates::where('producto_id', $pedido->id)
            ->where('type', 'productos')
            ->get();

        $lang = $pedido->lang;

        $idLang = Lang::where('iso', $lang)->first();

        if ($idLang) {
            $idLang = $idLang->id;
        } else {
            $idLang = 1;
        }

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
        return view('contacproduct::livewire.status-contacproduct');
    }
}
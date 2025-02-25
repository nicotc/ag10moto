<?php

namespace Modules\Pedidos\Livewire;

use App\Models\Pedidos;
use Livewire\Component;
use Livewire\WithFileUploads;
use Modules\Idiomas\Models\Lang;

class CrearPedidos extends Component
{
    use WithFileUploads;

    public $nombre;

    public $email;

    public $telefono;

    public $lang;

    public $problema;

    public $imagenes = [];

    public $languages = [];

    public function render()
    {
        $this->languages = Lang::pluck('lang', 'iso');

        return view('pedidos::livewire.crear-pedidos');
    }

    public function create()
    {

        $this->validate([
            'nombre' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'lang' => 'required',
            'problema' => 'required',
            'imagenes.*' => 'image|max:1024',

        ]);

        //  save images in storage
        // get path of images
        if ($this->imagenes != null) {

            $uuid = uniqid();

            foreach ($this->imagenes as $key => $imagen) {

                // Storage disk public

                $path = $imagen->store('public/imagenes/'.$uuid, 'public');
                $imagenes[$key] = $path;

            }

            $imagenes = implode(',', $imagenes);
        } else {
            $imagenes = null;
        }

        $pedido = new Pedidos;
        $pedido->nombre = $this->nombre;
        $pedido->email = $this->email;
        $pedido->telefono = $this->telefono;
        $pedido->lang = $this->lang;
        $pedido->problema = $this->problema;
        $pedido->imagenes = $imagenes;
        $pedido->save();

        $this->dispatch('notify', [
            'type' => 'success',
            'message' => 'Pedido creado correctamente',
        ]);

    }
}

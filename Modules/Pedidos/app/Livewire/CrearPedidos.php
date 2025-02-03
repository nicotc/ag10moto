<?php

namespace Modules\Pedidos\Livewire;

use App\Models\Pedidos;
use Livewire\Component;
use Livewire\WithFileUploads;



class CrearPedidos extends Component
{
    use WithFileUploads;

    public $nombre;
    public $email;
    public $telefono;
    public $lang;
    public $problema;
    public $imagenes = [];


    public function render()
    {
        return view('pedidos::livewire.crear-pedidos');
    }

    public function create(){



        $this->validate([
            'nombre' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'lang' => 'required',
            'problema' => 'required',
            'imagenes.*' => 'image|max:1024'

        ]);

//  save images in storage
// get path of images
        if($this->imagenes != null){


        foreach ($this->imagenes as $key => $imagen) {
            $path = $imagen->store('public/imagenes');
            $this->imagenes[$key] = $path;
        }

        $imagenes = implode(',', $this->imagenes);
    }else{
        $imagenes = null;
    }

        $pedido = new Pedidos();
        $pedido->nombre = $this->nombre;
        $pedido->email = $this->email;
        $pedido->telefono = $this->telefono;
        $pedido->lang = $this->lang;
        $pedido->problema = $this->problema;
        $pedido->imagenes =  $imagenes;
        $pedido->save();

        $this->dispatch('notify', [
            'type' => 'success',
            'message' => 'Pedido creado correctamente'
        ]);
        
    }

}

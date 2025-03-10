<?php

namespace Modules\Pedidos\Livewire;

use App\Models\Repairs;
use Livewire\Component;
use Livewire\WithFileUploads;
use Modules\Idiomas\Models\Lang;

class EditarPedidos extends Component
{
    use WithFileUploads;

    public $nombre;

    public $email;

    public $telefono;

    public $lang;

    public $problema;

    public $imagenes = [];

    public $languages = [];

    public $pedido;




    public function render()
    {
        $this->languages = Lang::pluck('lang', 'id');

        $this->nombre = $this->pedido->name;
        $this->email = $this->pedido->email;
        $this->telefono = $this->pedido->phone;
        $this->lang = $this->pedido->langs_id;
        $this->problema = $this->pedido->details;


        return view('pedidos::livewire.editar-pedidos');
    }

    public function updatePedido()
    {
      // Buscar el pedido a actualizar
    $repairs = Repairs::find($this->pedido->id);

    if (!$repairs) {
        return;
    }

    // Obtener imágenes existentes
    $imagenesExistentes = $repairs->images ? explode(',', $repairs->images) : [];

    if (!empty($this->imagenes)) {
        $uuid = uniqid();
        foreach ($this->imagenes as $key => $imagen) {
            // Guardar nueva imagen
            $path = $imagen->store('public/imagenes/'.$uuid, 'public');
            $imagenesExistentes[] = $path; // Agregar la nueva imagen al array
        }
    }

    // Guardar la información actualizada
    $repairs->name = $this->nombre;
    $repairs->email = $this->email;
    $repairs->phone = $this->telefono;
    $repairs->langs_id = $this->lang;
    $repairs->details = $this->problema;
    $repairs->images = implode(',', $imagenesExistentes); // Guardar imágenes sin eliminar las previas
    $repairs->save();

    $this->dispatch('notify', ['type' => 'success', 'message' => 'Pedido actualizado correctamente']);



    }
}
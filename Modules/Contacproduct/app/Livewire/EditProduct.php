<?php

namespace Modules\Contacproduct\Livewire;

use App\Models\Lang;
use App\Models\Orders;
use Livewire\Component;

class EditProduct extends Component
{
    public $product;

    public $items = ['Monos','Chaquetas','Caferacer', 'Guantes', 'Botas', 'Airbags'];

    public $langs_ids = [];

    public $langs_id;

    public $item;

    public $name;

    public $email;

    public $phone;

    public $details;

    public $status_ids = [];


    public function render()
    {

        $langs_ids = Lang::pluck('lang', 'id')->toArray();
        $this->langs_ids = $langs_ids;

        $this->langs_id = $this->product->langs_id;
        $this->item = $this->product->item;
        $this->name = $this->product->name;
        $this->email = $this->product->email;
        $this->phone = $this->product->phone;
        $this->details = $this->product->details;



        return view('contacproduct::livewire.edit-product');
    }


    public function create(){

        $this->validate([
            'item' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'langs_id' => 'required',
        ]);

        $this->product->update([
            'item' => $this->item,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'langs_id' => $this->langs_id,
            'details' => $this->details,
        ]);

        $this->dispatch('notify', [
            'type' => 'success',
            'message' => 'Product updated successfully'
        ]);



    }

}

<?php

namespace Modules\Contacproduct\Livewire;

use App\Models\Orders;
use Livewire\Component;
use Modules\Idiomas\Models\Lang;

class CreateProduct extends Component
{
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



        return view('contacproduct::livewire.create-product');
    }

    public function create()
    {

        $this->validate([
            'item' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'langs_id' => 'required',
        ]);

        Orders::create([
            'item' => $this->item,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'details' => $this->details,
            'status_id' => 1,
            'langs_id' => $this->langs_id,
        ]);


        $this->reset();
        $this->dispatch('notify', [
            'type' => 'success',
            'message' => 'Product created successfully'
        ]);
    }



}

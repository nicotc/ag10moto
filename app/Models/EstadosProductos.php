<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstadosProductos extends Model
{
    protected $table = 'estados_productos';
    protected $fillable = ['type', 'estado_id', 'producto_id', 'user_id', 'email'];

    public function estado()
    {
        return $this->belongsTo('Modules\Estados\Models\Status', 'estado_id');
    }

    public function producto()
    {
        return $this->belongsTo('Modules\Productos\Models\Product', 'producto_id');
    }

    public function user()
    {

        return $this->belongsTo('App\Models\User', 'user_id');
    }

   
}

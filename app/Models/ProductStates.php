<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductStates extends Model
{

    protected $table = 'product_states';

    protected $fillable = [
        'type',
        'status_id',
        'product_id',
        'user_id',
        'email'];

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
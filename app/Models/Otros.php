<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Otros extends Model
{
    protected $table = 'otros';

    protected $fillable = [
        'id_pedidos',
        'nombre',
        'email',
        'telefono',
        'horallamada',
        'lang',
        'item',
        'fv_form_id',
        'status',
    ];
}
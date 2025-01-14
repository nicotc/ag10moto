<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    protected $table = 'pedidos';
    protected $fillable = [
        'id_pedidos',
        'nombre',
        'email',
        'telefono',
        'problema',
        'imagenes',
        'aceptacion',
        'lang',
        'fv_form_id'
    ];







}

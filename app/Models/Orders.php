<?php

namespace App\Models;

use App\Models\Lang;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'Orders';

    protected $fillable = [
        'id_orders',
        'name',
        'email',
        'phone',
        'langs_id',
        'item',
        'details',
        'fv_form_id',
        'status_id',
    ];

    public function status() { return $this->belongsTo(Status::class); }
    public function langs() { return $this->belongsTo(Lang::class); }

}
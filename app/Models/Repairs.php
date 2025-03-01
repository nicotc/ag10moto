<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Repairs extends Model
{
    protected $table = 'repairs';

    protected $fillable = [
        'id_repairs',
        'name',
        'email',
        'phone',
        'details',
        'images',
        'langs_id',
        'fv_form_id',
        'status_id',
    ];
    public function status() { return $this->belongsTo(Status::class); }
    public function langs() { return $this->belongsTo(Lang::class); }



}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = ['model_name', 'name', 'color', 'email'];
    public function translations() { return $this->hasMany(StatusTranslation::class); }
}
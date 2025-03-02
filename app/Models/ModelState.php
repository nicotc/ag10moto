<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelState extends Model
{
    protected $fillable = ['model_name', 'model_id', 'status_id'];
}

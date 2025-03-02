<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatusTranslation extends Model
{
    protected $table = 'status_translations';

    protected $fillable = ['status_id', 'langs_id', 'name'];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}

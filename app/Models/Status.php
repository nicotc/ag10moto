<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = ['model_name', 'color', 'email_template_id'];

    public function statusTranslation()
    {
        return $this->hasMany(StatusTranslation::class);
    }

    public function emailTemplate()
    {
        return $this->belongsTo(EmailTemplate::class);
    }

    public function model()
    {
        return $this->belongsTo(Model::class);
    }
}

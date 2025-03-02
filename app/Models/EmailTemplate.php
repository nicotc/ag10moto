<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailTemplate extends Model
{
    protected $fillable = [
        'model_name',
        'name',
    ];

    public function emailTemplateTranslations()
    {
        return $this->hasMany(EmailTemplateTranslations::class);
    }
}

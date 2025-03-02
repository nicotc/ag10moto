<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailTemplateTranslations extends Model
{
    protected $fillable = [
        'email_template_id',
        'langs_id',
        'subject',
        'body',
    ];

    public function emailTemplate()
    {
        return $this->belongsTo(EmailTemplate::class);
    }
}

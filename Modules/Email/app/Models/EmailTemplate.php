<?php

namespace Modules\Email\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// use Modules\Email\Database\Factories\EmailTemplateFactory;

class EmailTemplate extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['langs_id', 'name', 'subject', 'body'];

    public function processTemplate($variables)
    {
        $body = $this->body;
        foreach ($variables as $key => $value) {
            $body = str_replace("{{ $key }}", $value, $body);
        }

        return $body;
    }
}

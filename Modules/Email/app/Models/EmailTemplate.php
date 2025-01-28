<?php

namespace Modules\Email\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Email\Database\Factories\EmailTemplateFactory;

class EmailTemplate extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['language', 'name', 'subject', 'body'];

    public function processTemplate($variables)
    {
        $body = $this->body;
        foreach ($variables as $key => $value) {
            $body = str_replace("{{ $key }}", $value, $body);
        }
        return $body;
    }

}

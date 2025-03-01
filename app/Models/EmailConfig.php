<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailConfig extends Model
{
    protected $fillable = [
        'langs_id',
        'mail_host',
        'mail_port',
        'mail_username',
        'mail_password',
        'mail_encryption',
        'mail_from_address',
        'mail_from_name',
    ];

    public function lang()
    {
        return $this->belongsTo(Lang::class);
    }


    public function getMailPasswordAttribute($value)
    {
        return decrypt($value);
    }



    public function setMailPasswordAttribute($value)
    {
        $this->attributes['mail_password'] = encrypt($value);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailTemplate extends Model
{
    protected $fillable = [
        'name'
    ];





    public function setMailPasswordAttribute($value)
    {
        $this->attributes['mail_password'] = encrypt($value);
    }
}
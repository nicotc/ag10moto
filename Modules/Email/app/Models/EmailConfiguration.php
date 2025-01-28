<?php

namespace Modules\Email\Models;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Email\Database\Factories\EmailConfigurationFactory;

class EmailConfiguration extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'mail_host',
        'mail_port',
        'mail_username',
        'mail_password',
        'mail_encryption',
        'mail_from_address',
        'mail_from_name',
        'language'
    ];

// Mutator to encrypt password before saving
public function setMailPasswordAttribute($value)
{
    $this->attributes['mail_password'] = Crypt::encryptString($value);
}

// Accessor to decrypt password when accessing it
public function getMailPasswordAttribute($value)
{
    return Crypt::decryptString($value);
}
}

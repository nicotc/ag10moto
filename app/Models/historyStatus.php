<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class historyStatus extends Model
{

    protected $table = 'history_statuses';

    protected $fillable = [
        'model_name',
        'model_id',
        'status',
        'user_id',
        'email',
        'subject',
        'email_user',
        'sender',
        'send',
    ];

    public function model()
    {
        return $this->morphTo();
    }

}
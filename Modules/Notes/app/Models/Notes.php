<?php

namespace Modules\Notes\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// use Modules\Notes\Database\Factories\NotesFactory;

class Notes extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'model_id',
        'model_name',
        'note',
        'user_id',
        'status',
    ];

    // protected static function newFactory(): NotesFactory
    // {
    //     // return NotesFactory::new();
    // }
}
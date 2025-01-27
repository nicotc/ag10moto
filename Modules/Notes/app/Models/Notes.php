<?php

namespace Modules\Notes\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Notes\Database\Factories\NotesFactory;

class Notes extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'pedido_id',
        'note',
        'created_by',
        'status'
    ];

    // protected static function newFactory(): NotesFactory
    // {
    //     // return NotesFactory::new();
    // }
}

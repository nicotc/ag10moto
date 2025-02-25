<?php

namespace Modules\Estados\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// use Modules\Estados\Database\Factories\StatusFactory;

class StatusTraducciones extends Model
{
    use HasFactory;

    protected $table = 'status_traducciones';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'id',
        'type',
        'status_id',
        'langs_id',
        'nombre',

    ];

    // protected static function newFactory(): StatusFactory
    // {
    //     // return StatusFactory::new();
    // }
}

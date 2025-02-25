<?php

namespace Modules\Idiomas\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// use Modules\Idiomas\Database\Factories\LangFactory;

class Lang extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'lang',
        'iso',
    ];

    // protected static function newFactory(): LangFactory
    // {
    //     // return LangFactory::new();
    // }
}

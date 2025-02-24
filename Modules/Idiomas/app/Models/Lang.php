<?php

namespace Modules\Idiomas\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
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

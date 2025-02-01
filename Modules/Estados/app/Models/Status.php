<?php

namespace Modules\Estados\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Estados\Database\Factories\StatusFactory;

class Status extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    // protected static function newFactory(): StatusFactory
    // {
    //     // return StatusFactory::new();
    // }
}

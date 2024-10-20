<?php

namespace Modules\Surgery\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Surgery\Database\Factories\SurgeryFactory;

class Surgery extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    // protected static function newFactory(): SurgeryFactory
    // {
    //     // return SurgeryFactory::new();
    // }
}

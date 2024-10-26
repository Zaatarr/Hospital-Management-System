<?php

namespace Modules\Doctor\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Shift extends Model
{
    use HasFactory;

    protected $fillable = ['shift_type', 'shift_start_date', 'shift_end_date', 'doctor_id'];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }


}

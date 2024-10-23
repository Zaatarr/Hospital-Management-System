<?php

namespace Modules\Doctor\Entities;

use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    protected $fillable = ['shift_type', 'shift_start_date', 'shift_end_date', 'doctor_id'];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }
}

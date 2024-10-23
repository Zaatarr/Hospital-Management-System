<?php

namespace Modules\Surgery\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Doctor\Entities\Doctor;
use Modules\Patient\Entities\PatientFile;
use Modules\Doctor\Entities\Shift;




class Surgery extends Model
{
    protected $fillable = ['doctor_id', 'patient_id', 'surgery_type', 'doctor_shift'];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }

    public function patient()
    {
        return $this->belongsTo(PatientFile::class, 'patient_id');
    }

    public function shift()
    {
        return $this->belongsTo(Shift::class, 'doctor_shift');
    }
}

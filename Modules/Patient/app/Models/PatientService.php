<?php

namespace Modules\Patient\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Service\Entities\Service;

class Patient_Service extends Model
{
    protected $fillable = ['patient_id', 'service_id'];

    public function patient()
    {
        return $this->belongsTo(PatientFile::class, 'patient_id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}

<?php

namespace Modules\Patient\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Patient\Entities\PatientFile;
use Modules\Service\Entities\Service;

class Admission extends Model
{
    protected $fillable = ['admission_id', 'admission_status', 'patient_name', 'admission_date', 'discharge_date', 'patient_id', 'service_id'];

    public function patient()
    {
        return $this->belongsTo(PatientFile::class, 'patient_id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}

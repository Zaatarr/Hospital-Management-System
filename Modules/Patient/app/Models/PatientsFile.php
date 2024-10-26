<?php


namespace Modules\Patient\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Patient\Entities\Admission;
use Modules\Department\Entities\Room_Dep;
use Modules\Surgery\Entities\Surgery;

class PatientFile extends Model
{
    protected $fillable = ['patient_name', 'patient_address', 'contact_number', 'emergent_contact_number'];

    public function admissions()
    {
        return $this->hasMany(Admission::class, 'patient_id');
    }

    public function patientServices()
    {
        return $this->hasMany(Patient_Service::class, 'patient_id');
    }

    public function surgeries()
    {
        return $this->hasMany(Surgery::class, 'patient_id');
    }

    public function roomDeps()
    {
        return $this->hasMany(Room_Dep::class, 'patient_id');
    }
}

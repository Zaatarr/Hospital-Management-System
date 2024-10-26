<?php

namespace Modules\Service\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Patient\Entities\Patient_Service;


class Service extends Model
{
    protected $fillable = ['service_name'];

    public function patientServices()
    {
        return $this->hasMany(Patient_Service::class, 'service_id');
    }
}



<?php

namespace Modules\Doctor\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Department\Entities\Room_Dep;
use Modules\Surgery\Entities\Surgery;

class Doctor extends Model
{
    protected $fillable = ['doctor_name', 'speciality_name'];

    public function shifts()
    {
        return $this->hasMany(Shift::class, 'doctor_id');
    }

    public function surgeries()
    {
        return $this->hasMany(Surgery::class, 'doctor_id');
    }

    public function roomDeps()
    {
        return $this->hasMany(Room_Dep::class, 'doctor_id');
    }
}


<?php

namespace Modules\Department\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Room\Models\Room;
use Modules\Doctor\Entities\Doctor;
use Modules\Patient\Entities\PatientFile;
use Modules\Department\Entities\Department;
use Modules\Room\Entities\Reservation;

class Room_Dep extends Model
{
    use HasFactory;

    protected $fillable = ['room_id', 'dep_id', 'doctor_id', 'patient_id'];

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'dep_id');
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }

    public function patient()
    {
        return $this->belongsTo(PatientFile::class, 'patient_id');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'room_dep_id');
    }
}

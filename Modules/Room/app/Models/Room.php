<?php

namespace Modules\Room\Models;

use Illuminate\Database\Eloquent\Model;

use Modules\Department\Entities\Room_Dep;
use Modules\Department\Entities\Department;
use Modules\Room\Entities\Reservation;



class Room extends Model
{
    protected $fillable = ['room_status', 'dep_id'];

    public function department()
    {
        return $this->belongsTo(Department::class, 'dep_id');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'room_id');
    }

    public function roomDeps()
    {
        return $this->hasMany(Room_Dep::class, 'room_id');
    }
}



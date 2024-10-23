<?php

namespace Modules\Room\Entities;
use Modules\Room\Models\Room;


use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['res_date', 'appointment_date', 'res_status', 'room_id'];

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id');
    }
}


<?php

namespace Modules\Department\Entities;
use Modules\Room\Models\Room;
use Modules\Department\Entities\Room_Dep;




use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['dep_name'];

    public function rooms()
    {
        return $this->hasMany(Room::class, 'dep_id');
    }

    public function roomDeps()
    {
        return $this->hasMany(Room_Dep::class, 'dep_id');
    }
}


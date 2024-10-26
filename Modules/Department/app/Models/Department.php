<?php

namespace Modules\Department\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Room\Models\Room;
use Modules\Department\Entities\Room_Dep;

class Department extends Model
{
    use HasFactory;

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


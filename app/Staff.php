<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staff';

    public function attendance() {
    	return $this->hasMany('App\StaffAttendance','staff_id');
    }

}

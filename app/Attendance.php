<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    public $table = 'attendance';
    protected $fillable = ['enrollment_id','date','present','attendance_by','created_by'];
}

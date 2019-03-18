<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $table = 'student';
    protected $fillable = ['name','dob','fathers_name','mothers_name','created_by'];
}

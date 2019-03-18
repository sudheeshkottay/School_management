<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    public $table = 'enrollment';
    protected $fillable = ['batch_id','student_id'];
}

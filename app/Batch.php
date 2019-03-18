<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    public $table = 'batch';
    protected $fillable = ['name','begining_date','ending_date','class_teacher_id'];
}

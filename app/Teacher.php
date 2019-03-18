<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public $table = 'teacher';
    protected $fillable = ['name','specialization','joining_date','created_by'];

}

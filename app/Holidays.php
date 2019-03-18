<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Holidays extends Model
{
    public $table = 'holidays';
    protected $fillable = ['from_date','to_date','created_by'];
}

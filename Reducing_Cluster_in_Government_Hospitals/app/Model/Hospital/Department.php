<?php

namespace App\Model\Hospital;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    // stores hospital department
    protected $fillable = ['user_id','name'];
}

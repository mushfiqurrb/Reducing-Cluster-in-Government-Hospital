<?php

namespace App\Model\Hospital;

use Illuminate\Database\Eloquent\Model;

class HosBasicInfo extends Model
{
    // stores hospital basic information
    protected $fillable = ['user_id','name','email','phone','address'];
}

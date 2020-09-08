<?php

namespace App\Model\Patient;

use Illuminate\Database\Eloquent\Model;

class PatientBasicInfo extends Model
{
    // stores patients basic information
    protected $fillable = ['user_id','phone','dob','address','about','image'];
}

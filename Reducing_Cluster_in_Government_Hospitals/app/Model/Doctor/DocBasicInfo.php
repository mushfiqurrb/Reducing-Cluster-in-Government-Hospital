<?php

namespace App\Model\Doctor;

use Illuminate\Database\Eloquent\Model;

class DocBasicInfo extends Model
{
    // stores doctors basic information
	protected $fillable = ['user_id','degree','phone','dob','address','about','image'];
}

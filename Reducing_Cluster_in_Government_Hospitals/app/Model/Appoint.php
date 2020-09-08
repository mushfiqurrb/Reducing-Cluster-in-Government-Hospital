<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Appoint extends Model
{
    // stores appointment list
    protected $fillable = ['relation_id','patient_id'];
}

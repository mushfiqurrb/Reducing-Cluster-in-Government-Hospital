<?php

namespace App\Model\Hospital;

use Illuminate\Database\Eloquent\Model;

class HosBranch extends Model
{
    // stores hospital branches
    protected $fillable = ['user_id','name','email','phone','address','about'];
}

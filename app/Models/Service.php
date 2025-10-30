<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //Call migration
    protected $table = 'services';
    protected $fillable = ['army_no','rank','name','aadhar_no','category_of_ward','force_type','unit_regt_corps','vill','po','tehsil','distt','pin','mob_no','dob','doe','dor','present_pc','ppo_no','dependent_name','no_of_dependent','relation_with_esm','dependent_dob','dependent_occupation','dependent_aadhar','bank_details','status'];
}

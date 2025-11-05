<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChildDetail extends Model
{
    //Call migration
    protected $table = 'children_details';
    protected $fillable = ['ex_service_man_id','name','age','gender','education','occupation'];
}

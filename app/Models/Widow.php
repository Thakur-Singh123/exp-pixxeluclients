<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Widow extends Model
{
    //call migration
    protected $table = 'widows';
    protected $fillable = ['ex_service_man_id','window_name','date_of_death','window_image','window_aadhar_image','window_pan_image','status'];

    //Function for serviceman detail
    public function serviceman_detail() {
        return $this->belongsTo(ExServiceMan::class, 'ex_service_man_id', 'army_no');
    }

    //Function for get children detail
    // children detail
    public function children() {
        return $this->hasMany(ChildDetail::class, 'ex_service_man_id', 'ex_service_man_id');
    }
}

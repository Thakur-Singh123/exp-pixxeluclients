<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VeerNari extends Model
{
    //call migration
    protected $table = 'veer_naris';
    protected $fillable = ['ex_service_man_id','veer_nari_name','veer_nari_expose_year','veer_image','veer_aadhar_image','veer_pan_image','status'];

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

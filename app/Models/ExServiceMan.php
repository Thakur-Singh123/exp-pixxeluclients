<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExServiceMan extends Model
{
    //Call migration
    protected $table = 'ex_service_man_records';
    protected $fillable = ['sr_no','army_no','rank','name','village','post_office','tehsil','district','state','pin_code','mobile_no','regiment_corps','dob','doe','dor','education','present_occupation','bank_acc_no','bank_name','ifsc_code','micr_code','echs_card_no','aadhar_card_no','pan_card_no','csd_card_no','ex_documents','decorator_soldier','disabled','image','aadhar_image','pan_image','discharge_image','ppo_image','joint_image','echs_image','csd_image','bank_image','reg_on_dgr_portal','spouse_name','spouse_address','spouse_dob','spouse_education','spouse_mobile','spouse_aadhar_card','spo_documents','spouse_pan_card','spouse_echs_card','spouse_csd_card','spouse_bank_acc_no','spouse_bank_name','spouse_ifsc_code','spouse_micr_code','spouse_image','spouse_aadhar_image','spouse_pan_image','spouse_joint_image','spouse_echs_image','spouse_csd_image','spouse_bank_image','father_name','father_address','father_dob','father_education','father_mobile','father_aadhar_card','father_pan_card','father_echs_card','father_csd_card','father_bank_acc_no','father_bank_name','father_ifsc_code','father_micr_code','father_image','father_aadhar_image','father_pan_image','mother_name','mother_address','mother_dob','mother_education','mother_mobile','mother_aadhar_card','mother_pan_card','mother_echs_card','mother_csd_card','mother_bank_acc_no','mother_bank_name','mother_ifsc_code','mother_micr_code','mother_image','mother_aadhar_image','mother_pan_image','window_name','date_of_death','window_image','window_aadhar_image','window_pan_image','veer_nari_name','veer_nari_expose_year','status'];

    //Function for get children detail
    public function children() {
        return $this->hasMany(ChildDetail::class, 'ex_service_man_id', 'army_no'); 
    }
}

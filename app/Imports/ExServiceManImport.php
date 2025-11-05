<?php

namespace App\Imports;

use App\Models\ExServiceMan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Carbon\Carbon;

class ExServiceManImport implements ToModel, WithHeadingRow
{
    //Function for import data
    public function model(array $row) {
        //cconvert to lowercase)
        $row = array_change_key_case($row, CASE_LOWER);
        //Check if army no is present
        if (!isset($row['army_no']) || empty($row['army_no'])) {
            return null;
        //Check if army no exists or not
        } elseif (ExServiceMan::where('army_no', $row['army_no'])->exists()) {
            return null;
        //Import records
        }  else {
            //Create model
            return new ExServiceMan([
                //Basic info
                'sr_no' => $row['ser_no'] ?? null,
                'army_no' => $row['army_no'] ?? null,
                'rank' => $row['rank'] ?? null,
                'name' => $row['name'] ?? null,
                'village' => $row['village'] ?? null,
                'post_office' => $row['post_office'] ?? null,
                'tehsil' => $row['tehsil'] ?? null,
                'district' => $row['district'] ?? null,
                'state' => $row['state'] ?? null,
                'pin_code' => $row['pin_code'] ?? null,
                'mobile_no' => $row['mobile_no'] ?? null,
                'regiment_corps' => $row['regiment_corps'] ?? null,
                'dob' => isset($row['date_of_birth']) ? Carbon::parse($row['date_of_birth'])->format('Y-m-d') : null,
                'doe' => isset($row['date_of_enrolment']) ? Carbon::parse($row['date_of_enrolment'])->format('Y-m-d') : null,
                'dor' => isset($row['date_of_retirement']) ? Carbon::parse($row['date_of_retirement'])->format('Y-m-d') : null,
                'education' => $row['education'] ?? null,
                'present_occupation' => $row['present_occupation'] ?? null,
                //Bank info
                'bank_acc_no' => $row['bank_account_number'] ?? null,
                'bank_name' => $row['bank_name'] ?? null,
                'ifsc_code' => $row['ifsc_code'] ?? null,
                'micr_code' => $row['micr_code'] ?? null,
                //Personal cards
                'aadhar_card_no' => $row['aadhar_card_no'] ?? null,
                'pan_card_no' => $row['pan_card_no'] ?? null,
                'echs_card_no' => $row['echs_card_no'] ?? null,
                'csd_card_no' => $row['csd_card_no'] ?? null,
                'decorator_soldier' => $row['decorator_soldier'] ?? null,
                'disabled' => $row['disabled'] ?? null,
                'reg_on_dgr_portal' => $row['registered_on_dgr_portal'] ?? null,
                //Spouse
                'spouse_name' => $row['spouse_name'] ?? null,
                'spouse_address' => $row['spouse_address'] ?? null,
                'spouse_dob' => isset($row['spouse_date_of_birth']) ? Carbon::parse($row['spouse_date_of_birth'])->format('Y-m-d') : null,
                'spouse_education' => $row['spouse_education'] ?? null,
                'spouse_mobile' => $row['spouse_mobile'] ?? null,
                'spouse_aadhar_card' => $row['spouse_aadhar_card_no'] ?? null,
                'spouse_pan_card' => $row['spouse_pan_card_no'] ?? null,
                'spouse_echs_card' => $row['spouse_echs_card_no'] ?? null,
                'spouse_csd_card' => $row['spouse_csd_card_no'] ?? null,
                'spouse_bank_acc_no' => $row['spouse_bank_account_no'] ?? null,
                'spouse_bank_name' => $row['spouse_bank_name'] ?? null,
                'spouse_ifsc_code' => $row['spouse_ifsc_code'] ?? null,
                'spouse_micr_code' => $row['spouse_micr_code'] ?? null,
                //Father
                'father_name' => $row['father_name'] ?? null,
                'father_address' => $row['father_address'] ?? null,
                'father_dob' => isset($row['father_date_of_birth']) ? Carbon::parse($row['father_date_of_birth'])->format('Y-m-d') : null,
                'father_education' => $row['father_education'] ?? null,
                'father_mobile' => $row['father_mobile'] ?? null,
                'father_aadhar_card' => $row['father_aadhar_card_no'] ?? null,
                'father_pan_card' => $row['father_pan_card_no'] ?? null,
                'father_echs_card' => $row['father_echs_card_no'] ?? null, 
                'father_csd_card' => $row['father_csd_card_no'] ?? null,
                'father_bank_acc_no' => $row['father_bank_account_no'] ?? null,
                'father_bank_name' => $row['father_bank_name'] ?? null,
                'father_ifsc_code' => $row['father_ifsc_code'] ?? null,
                'father_micr_code' => $row['father_micr_code'] ?? null,
                //Mother
                'mother_name' => $row['mother_name'] ?? null,
                'mother_address' => $row['mother_address'] ?? null,
                'mother_dob' => isset($row['mother_date_of_birth']) ? Carbon::parse($row['mother_date_of_birth'])->format('Y-m-d') : null,
                'mother_education' => $row['mother_education'] ?? null,
                'mother_mobile' => $row['mother_mobile_no'] ?? null,
                'mother_aadhar_card' => $row['mother_aadhar_card_no'] ?? null,
                'mother_pan_card' => $row['mother_pan_card_no'] ?? null,
                'mother_echs_card' => $row['mother_echs_card_no'] ?? null,
                'mother_csd_card' => $row['mother_csd_card_no'] ?? null,
                'mother_bank_acc_no' => $row['mother_bank_account_no'] ?? null,
                'mother_bank_name' => $row['mother_bank_name'] ?? null,
                'mother_ifsc_code' => $row['mother_ifsc_code'] ?? null,
                'mother_micr_code' => $row['mother_micr_code'] ?? null,
                //Widow 
                'window_name' => $row['widow_name'] ?? null,
                'date_of_death' => isset($row['date_of_death']) ? Carbon::parse($row['date_of_death'])->format('Y-m-d') : null,
                //Veer Nari
                'veer_nari_name' => $row['veer_nari_name'] ?? null,
                'veer_nari_expose_year' => $row['expose_year'] ?? null,
            ]);
        }
    }
}

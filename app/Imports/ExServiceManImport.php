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
                'ex_documents' => $row['ex_documents'] ?? null,
                //Spouse
                'spouse_name' => $row['spouse_name'] ?? null,
                'spouse_address' => $row['spouse_address'] ?? null,
                'spouse_dob' => isset($row['spouse_date_of_birth']) ? Carbon::parse($row['spouse_date_of_birth'])->format('Y-m-d') : null,
                'spouse_mobile' => $row['spouse_mobile'] ?? null,
                'spouse_aadhar_card' => $row['spouse_aadhar_card_no'] ?? null,
                'spo_documents' => $row['spo_documents'] ?? null,
            ]);
        }
    }
}

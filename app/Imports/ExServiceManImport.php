<?php

namespace App\Imports;

use App\Models\ExServiceMan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ExServiceManImport implements ToModel, WithHeadingRow
{
    /**
     * Create a model instance for each row.
     *
     * @param array $row
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    // Function for import data
    public function model(array $row) {
        //Check if army no is present
        if (!isset($row['army_no']) || empty($row['army_no'])) {
            return null;
        //Check if army no exists or not
        } elseif (ExServiceMan::where('army_no', $row['army_no'])->exists()) {
            return null;
        //Import records
        }  else {
            return new ExServiceMan([
                'sr_no' => $row['sr_no'] ?? null,
                'army_no' => $row['army_no'],
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
                'dob' => $row['dob'] ?? null,
                'doe' => $row['doe'] ?? null,
                'dor' => $row['dor'] ?? null,
                'education' => $row['education'] ?? null,
                'present_occupation' => $row['present_occupation'] ?? null,
                'aadhar_card_no' => $row['aadhar_card_no'] ?? null,
                'echs_card_no' => $row['echs_card_no'] ?? null,
                'csd_card_no' => $row['csd_card_no'] ?? null,
                'decorator_soldier' => $row['decorator_soldier'] ?? null,
                'disabled' => $row['disabled'] ?? null,
                'reg_on_dgr_portal' => $row['reg_on_dgr_portal'] ?? null,
            ]);
        }
    }
}

<?php

namespace App\Imports;

use App\Models\ExServiceMan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Carbon\Carbon;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class ExServiceManImport implements ToModel, WithHeadingRow
{

    //Function for model
    public function model(array $row) {
        //Convert headings to lowercase
        $row = array_change_key_case($row, CASE_LOWER);

        //Skip if army_no empty
        if (!isset($row['no']) || empty(trim($row['no']))) {
            return null;
        }

        //Skip duplicate army_no
        if (ExServiceMan::where('army_no', trim($row['no']))->exists()) {
            return null;
        }

        //Create data
        return new ExServiceMan([
            'army_no' => trim($row['no']) ?? null,
            'rank' => $row['rank'] ?? null,
            'name' => $row['name'] ?? null,
            'village' => $row['vill'] ?? null,
            'post_office' => $row['po'] ?? null,
            'tehsil' => $row['tehsil'] ?? null,
            'district' => $row['dist'] ?? null,
            'state' => $row['state'] ?? null,
            'pin_code' => $row['pin_code'] ?? null,
            'mobile_no' => $row['mobile_no'] ?? null,
            'regiment_corps' => $row['arms_service'] ?? null,
            'force_type' => $row['forces_type'] ?? null,

            //Dates
            'dob' => $this->formatDate($row['dob'] ?? null),
            'doe' => $this->formatDate($row['doe'] ?? null),
            'dor' => $this->formatDate($row['dor'] ?? null),
            'ppo_no' => $row['ppo_no'] ?? null,

            //Bank
            'bank_acc_no' => $row['bank_account_number'] ?? null,
            'bank_name' => $row['bank_name'] ?? null,
            'ifsc_code' => $row['ifsc_code'] ?? null,
            'micr_code' => $row['micr_code'] ?? null,

            //Cards
            'aadhar_card_no' => $row['aadhar_card_no'] ?? null,
            'pan_card_no' => $row['pan_card_no'] ?? null,
            'echs_card_no' => $row['echs_card_no'] ?? null,
            'csd_card_no' => $row['csd_card_no'] ?? null,
            'ex_documents' => $row['ex_documents'] ?? null,

            //Spouse
            'spouse_name' => $row['name_of_dependent'] ?? null,
            'spouse_address' => $row['spouse_address'] ?? null,
            'spouse_dob' => $this->formatDate($row['spouse_date_of_birth'] ?? null),
            'spouse_mobile' => $row['spouse_mobile'] ?? null,
            'spouse_aadhar_card' => $row['spouse_aadhar_card'] ?? null,

            'canteen_card' => $row['canteen_card_no'] ?? null,
            'spo_documents' => $row['spo_documents'] ?? null,
        ]);
    }

    //Function for date formatter
    private function formatDate($value) {
        if ($value === null || $value === '') {
            return null;
        }
        try {
            if (is_numeric($value)) {
                return Carbon::instance(
                    Date::excelToDateTimeObject($value)
                )->format('Y-m-d');
            }
            $formats = [
                'd/m/Y',
                'd-m-Y',
                'd M Y',
                'd M, Y',
                'd F Y',
                'Y-m-d'
            ];
            foreach ($formats as $format) {
                try {
                    return Carbon::createFromFormat($format, trim($value))->format('Y-m-d');
                } catch (\Exception $e) {
                    continue;
                }
            }
            return Carbon::parse($value)->format('Y-m-d');

        } catch (\Exception $e) {
            return null;
        }
    }
}
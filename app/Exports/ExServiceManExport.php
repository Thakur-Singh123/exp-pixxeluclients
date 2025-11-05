<?php

namespace App\Exports;

use App\Models\ExServiceMan;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;

class ExServiceManExport implements FromCollection, WithHeadings, WithEvents
{
    //Function for collection data
    public function collection() {
        //Get services
        $all_services = ExServiceMan::orderBy('id', 'DESC')->get();
        //Get data
        $data = [];
        //Geta all services
        foreach ($all_services as $service) {
            $data[] = [
                'SER No' => $service->sr_no ?? '',
                'Army No' => $service->army_no ?? '',
                'Rank' => $service->rank ?? '',
                'Name' => $service->name ?? '',
                'Village' => $service->village ?? '',
                'Post Office' => $service->post_office ?? '',
                'Tehsil' => $service->tehsil ?? '',
                'District' => $service->district ?? '',
                'State' => $service->state ?? '',
                'Pin Code' => $service->pin_code ?? '',
                'Mobile No' => $service->mobile_no ?? '',
                'Regiment / Corps' => $service->regiment_corps ?? '',
                'Date of Birth' => $service->dob ? Carbon::parse($service->dob)->format('d M, Y') : '',
                'Date of Enrolment' => $service->doe ? Carbon::parse($service->doe)->format('d M, Y') : '',
                'Date of Retirement' => $service->dor ? Carbon::parse($service->dor)->format('d M, Y') : '',
                'Education' => $service->education ?? '',
                'Present Occupation' => $service->present_occupation ?? '',
                'Bank Account Number' => $service->bank_acc_no ?? '',
                'Bank Name' => $service->bank_name ?? '',
                'IFSC Code' => $service->ifsc_code ?? '',
                'MICR Code' => $service->micr_code ?? '',
                'Aadhar Card No' => $service->aadhar_card_no ?? '',
                'Pan Card No' => $service->pan_card_no ?? '',
                'ECHS Card No' => $service->echs_card_no ?? '',
                'CSD Card No' => $service->csd_card_no ?? '',
                'Decorator Soldier' => $service->decorator_soldier ?? '',
                'Disabled' => $service->disabled ?? '',
                'Registered On DGR Portal' => $service->reg_on_dgr_portal ?? '',
                'Spouse Name' => $service->spouse_name ?? '',
                'Spouse Address' => $service->spouse_address ?? '',
                'Spouse Date of Birth' => $service->spouse_dob ? Carbon::parse($service->spouse_dob)->format('d M, Y') : '',
                'Spouse Education' => $service->spouse_education ?? '',
                'Spouse Mobile' => $service->spouse_mobile ?? '',
                'Spouse Aadhar Card No' => $service->spouse_aadhar_card ?? '',
                'Spouse Pan Card No' => $service->spouse_pan_card ?? '',
                'Spouse ECHS Card No' => $service->spouse_echs_card ?? '',
                'Spouse CSD Card No' => $service->spouse_csd_card ?? '',
                'Spouse Bank Account No' => $service->spouse_bank_acc_no ?? '',
                'Spouse Bank Name' => $service->spouse_bank_name ?? '',
                'Spouse IFSC Code' => $service->spouse_ifsc_code ?? '',
                'Spouse MICR Code' => $service->spouse_micr_code ?? '',
                'Father Name' => $service->father_name ?? '',
                'Father Address' => $service->father_address ?? '',
                'Father Date of Birth' => $service->father_dob ? Carbon::parse($service->father_dob)->format('d M, Y') : '',
                'Father Education' => $service->father_education ?? '',
                'Father Mobile' => $service->father_mobile ?? '',
                'Father Aadhar Card No' => $service->father_aadhar_card ?? '',
                'Father Pan Card No' => $service->father_pan_card ?? '',
                'Father ECHS Card No' => $service->father_echs_card ?? '',
                'Father CSD Card No' => $service->father_csd_card ?? '',
                'Father Bank Account No' => $service->father_bank_acc_no ?? '',
                'Father Bank Name' => $service->father_bank_name ?? '',
                'Father IFSC Code' => $service->father_ifsc_code ?? '',
                'Father MICR Code' => $service->father_micr_code ?? '',
                'Mother Name' => $service->mother_name ?? '',
                'Mother Address' => $service->mother_address ?? '',
                'Mother Date of Birth' => $service->mother_dob ? Carbon::parse($service->mother_dob)->format('d M, Y') : '',
                'Mother Education' => $service->mother_education ?? '',
                'Mother Mobile No' => $service->mother_mobile ?? '',
                'Mother Aadhar Card No' => $service->mother_aadhar_card ?? '',
                'Mother Pan Card No' => $service->mother_pan_card ?? '',
                'Mother ECHS Card No' => $service->mother_echs_card ?? '',
                'Mother CSD Card No' => $service->mother_csd_card ?? '',
                'Mother Bank Account No' => $service->mother_bank_acc_no ?? '',
                'Mother Bank Name' => $service->mother_bank_name ?? '',
                'Mother IFSC Code' => $service->mother_ifsc_code ?? '',
                'Mother MICR Code' => $service->mother_micr_code ?? '',
                'Widow Name' => $service->window_name ?? '',
                'Date of Death' => $service->date_of_death ? Carbon::parse($service->date_of_death)->format('d M, Y') : '',
                'Veer Nari Name' => $service->veer_nari_name ?? '',
                'Expose Year' => $service->veer_nari_expose_year ?? '',
            ];
        }
        //Return data
        return collect($data);
    }

    //Function for excel heading
    public function headings(): array {
        return [
            'SER No', 'Army No', 'Rank', 'Name', 'Village', 'Post Office', 'Tehsil', 'District', 'State',
            'Pin Code', 'Mobile No', 'Regiment / Corps', 'Date of Birth', 'Date of Enrolment',
            'Date of Retirement', 'Education', 'Present Occupation', 'Bank Account Number',
            'Bank Name', 'IFSC Code', 'MICR Code', 'Aadhar Card No', 'Pan Card No', 'ECHS Card No',
            'CSD Card No', 'Decorator Soldier', 'Disabled', 'Registered On DGR Portal', 'Spouse Name',
            'Spouse Address', 'Spouse Date of Birth', 'Spouse Education', 'Spouse Mobile',
            'Spouse Aadhar Card No', 'Spouse Pan Card No', 'Spouse ECHS Card No', 'Spouse CSD Card No',
            'Spouse Bank Account No', 'Spouse Bank Name', 'Spouse IFSC Code', 'Spouse MICR Code',
            'Father Name', 'Father Address', 'Father Date of Birth', 'Father Education', 'Father Mobile',
            'Father Aadhar Card No', 'Father Pan Card No', 'Father ECHS Card No', 'Father CSD Card No', 'Father Bank Account No',
            'Father Bank Name', 'Father IFSC Code', 'Father MICR Code', 'Mother Name', 'Mother Address',
            'Mother Date of Birth', 'Mother Education', 'Mother Mobile No', 'Mother Aadhar Card No',
            'Mother Pan Card No', 'Mother ECHS Card No', 'Mother CSD Card No', 'Mother Bank Account No',
            'Mother Bank Name', 'Mother IFSC Code', 'Mother MICR Code', 'Widow Name', 'Date of Death',
            'Veer Nari Name', 'Expose Year'
        ];
    }

    //Function for register events
    public function registerEvents(): array {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $sheet = $event->sheet->getDelegate();
                $sheet->getStyle('A1:BS1')->applyFromArray([
                    'font' => ['bold' => true, 'size' => 11],
                    'alignment' => [
                        'horizontal' => Alignment::HORIZONTAL_CENTER,
                        'vertical' => Alignment::VERTICAL_CENTER,
                        'wrapText' => true,
                    ],
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => Border::BORDER_THIN,
                        ],
                    ],
                    'fill' => [
                        'fillType' => Fill::FILL_SOLID,
                        'startColor' => ['rgb' => 'E2EFDA'],
                    ],
                ]);
                foreach (range('A', 'BS') as $col) {
                    $sheet->getColumnDimension($col)->setAutoSize(true);
                }
                $sheet->freezePane('A2');
            },
        ];
    }
}

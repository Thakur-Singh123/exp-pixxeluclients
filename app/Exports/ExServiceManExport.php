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
                'Bank Account Number' => $service->bank_acc_no ?? '',
                'Bank Name' => $service->bank_name ?? '',
                'IFSC Code' => $service->ifsc_code ?? '',
                'MICR Code' => $service->micr_code ?? '',
                'Aadhar Card Number' => $service->aadhar_card_no ?? '',
                'Pan Card Number' => $service->pan_card_no ?? '',
                'ECHS Card Number' => $service->echs_card_no ?? '',
                'CSD Card Number' => $service->csd_card_no ?? '',
                'ESM Documents' => $service->ex_documents ?? '',
                'Spouse Name' => $service->spouse_name ?? '',
                'Spouse Address' => $service->spouse_address ?? '',
                'Spouse Date of Birth' => $service->spouse_dob ? Carbon::parse($service->spouse_dob)->format('d M, Y') : '',
                'Spouse Mobile' => $service->spouse_mobile ?? '',
                'Spouse Aadhar Card Number' => $service->spouse_aadhar_card ?? '',
                'Spouse Documents' => $service->spo_documents ?? '',
            ];
        }
        //Return data
        return collect($data);
    }

    //Function for excel heading
    public function headings(): array {
        return [
            'Army No', 'Rank', 'Name', 'Village', 'Post Office', 'Tehsil', 'District', 'State',
            'Pin Code', 'Mobile Number', 'Regiment / Corps', 'Date of Birth', 'Date of Enrolment',
            'Date of Retirement','Bank Account Number','Bank Name', 'IFSC Code', 'MICR Code', 'Aadhar Card Number', 'Pan Card Number', 'ECHS Card Number',
            'CSD Card Number','ESM Documents','Spouse Name','Spouse Address', 'Spouse Date of Birth', 'Spouse Mobile',
            'Spouse Aadhar Card Number', 'Spouse Documents'
        ];
    }

    //Function for register events
    public function registerEvents(): array {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $sheet = $event->sheet->getDelegate();
                $sheet->getStyle('A1:AC1')->applyFromArray([
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
                foreach (range('A', 'AC') as $col) {
                    $sheet->getColumnDimension($col)->setAutoSize(true);
                }
                $sheet->freezePane('A2');
            },
        ];
    }
}

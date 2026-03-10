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
    //Function for collection
    public function collection() {
        //Get services
        $services = ExServiceMan::orderBy('id', 'desc')->get();
        //Data
        $data = [];
        foreach ($services as $service) {
            $data[] = [
                'NO' => $service->army_no ?? '-',
                'RANK' => $service->rank ?? '-',
                'NAME' => $service->name ?? '-',
                'VILL' => $service->village ?? '-',
                'PO' => $service->post_office ?? '-',
                'TEHSIL' => $service->tehsil ?? '-',
                'DIST' => $service->district ?? '-',
                'ARMS/ SERVICE' => $service->regiment_corps ?? '-',
                'FORCES TYPE' => $service->force_type ?? '-',
                'DOB' => $service->dob ? Carbon::parse($service->dob)->format('d M Y') : '-',
                'DOE' => $service->doe ? Carbon::parse($service->doe)->format('d M Y') : '-',
                'DOR' => $service->dor ? Carbon::parse($service->dor)->format('d M Y') : '-',
                'PPO NO' => $service->ppo_no ?? '-',
                'AADHAR CARD NO' => $service->aadhar_card_no ?? '-',
                'NAME OF DEPENDENT' => $service->spouse_name ?? '-',
                'RELATIONSHIP WITH ESM' => 'SPOUSE',
                'CANTEEN CARD NO' => $service->canteen_card ?? '-',
            ];
        }

        return collect($data);
    }

    //Function for heading
    public function headings(): array {
        return [
            'NO',
            'RANK',
            'NAME',
            'VILL',
            'PO',
            'TEHSIL',
            'DIST',
            'ARMS/ SERVICE',
            'FORCES TYPE',
            'DOB',
            'DOE',
            'DOR',
            'PPO NO',
            'AADHAR CARD NO',
            'NAME OF DEPENDENT',
            'RELATIONSHIP WITH ESM',
            'CANTEEN CARD NO'
        ];
    }

    //Function for register
    public function registerEvents(): array {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $sheet = $event->sheet->getDelegate();
                $sheet->getStyle('A1:AE1')->applyFromArray([
                    'font' => [
                        'bold' => true,
                        'size' => 11
                    ],
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
                        'startColor' => [
                            'rgb' => 'E2EFDA'
                        ],
                    ],

                ]);
                foreach (range('A', 'AR') as $col) {
                    $sheet->getColumnDimension($col)->setAutoSize(true);
                }
                $sheet->freezePane('A2');
            }
        ];
    }
}
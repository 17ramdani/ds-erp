<?php

namespace App\Exports;

use App\Models\kain\tipe_kain;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use Maatwebsite\Excel\Concerns\WithTitle;
use PhpOffice\PhpSpreadsheet\Style\Color;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithHeadings;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class TipeHargaExport implements FromCollection, WithTitle, WithHeadings, ShouldAutoSize, WithStyles
{
    public function collection()

   {
        $data = tipe_kain::with('jenis', 'kategori_warna')
            ->where('bagian', 'body')
            ->get()
            ->map(function ($tipe, $index) {
                // $customer_category_id = $tipe->customer_category_id ?? '';
                $customer_category_id = '';
                // $periode = $tipe->periode ?? '';
                $periode = '';
                return [
                    $tipe->id,
                    $tipe->jenis->nama,
                    $tipe->nama,
                    $tipe->kategori_warna->nama,
                    $customer_category_id,
                    $periode,
                    $tipe->harga_roll,
                    $tipe->harga_ecer,
                ];
            });

        return $data;
    }

    public function headings(): array
    {
        return [
            'ID TIPE KAIN',
            'JENIS KAIN',
            'NAMA TIPE KAIN',
            'KATEGORI WARNA',
            'ID KATEGORI CUSTOMER',
            'PERIODE',
            'HARGA ROLL',
            'HARGA ECER',
        ];
    }
    public function styles(Worksheet $sheet)
    {
        return [
            1 => [
                'font' => [
                    'bold' => true,
                ],
                'fill' => [
                    'fillType' => Fill::FILL_SOLID,
                    'startColor' => [
                        'argb' => Color::COLOR_YELLOW,
                    ],
                ],
                'alignment' => [
                    'horizontal' => Alignment::HORIZONTAL_CENTER,
                    'vertical' => Alignment::VERTICAL_CENTER,
                ],
                'row' => [
                    'height' => 40,
                ],
            ],
        ];
    }
    public function title(): string
    {
        return 'Upload';
    }
}

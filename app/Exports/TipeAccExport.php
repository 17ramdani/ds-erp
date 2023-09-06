<?php

namespace App\Exports;

use App\Models\Barang\Accessories;
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


class TipeAccExport implements WithMultipleSheets
{
    public function sheets(): array
    {
        $sheets = [];
        $sheets[] = new Uploadsheet();
        $sheets[] = new AccesoriesSheet();
        return $sheets;
    }
}

class Uploadsheet implements FromCollection, WithTitle, WithHeadings, ShouldAutoSize, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $data = tipe_kain::with('jenis', 'kategori_warna')
            ->where('bagian', 'body')
            ->get()
            ->map(function ($tipe, $index) {
                $accessories_id = '';
                return [
                    $tipe->id,
                    $tipe->jenis->nama,
                    $tipe->nama,
                    $tipe->kategori_warna->nama,
                    $accessories_id,
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
            'ID ACCESORIES',
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

class AccesoriesSheet implements FromCollection, WithTitle, WithHeadings, ShouldAutoSize, WithStyles
{
    public function collection()
    {
        return Accessories::select('id', 'name', 'type','harga_roll','harga_ecer')
        ->get()
            ->map(function ($acs) {
                return [
                    $acs->id,
                    $acs->name,
                    $acs->type,
                    $acs->harga_roll,
                    $acs->harga_ecer,
                ];
            });
    }

    public function headings(): array
    {
        return [
            'ID',
            'NAMA',
            'TYPE',
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
        return 'Aksesoris';
    }
}

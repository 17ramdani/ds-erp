<?php

namespace App\Exports;

use App\Models\Barang\Warna;
use App\Models\Barang\TipeKain;
use App\Models\Barang\JenisKain;
use App\Models\Barang\BarangLebar;
use App\Models\Barang\BarangSatuan;
use App\Models\Barang\BarangGramasi;
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



class TipeExport implements WithMultipleSheets
{
    public function sheets(): array
    {
        $sheets = [];
        $sheets[] = new Uploadsheet();
        // $sheets[] = new AccesoriesSheet();
        // $sheets[] = new JenisSheet();
        // $sheets[] = new GramasiSheet();
        // $sheets[] = new LebarSheet();
        // $sheets[] = new KatWarnaSheet();
        // $sheets[] = new WarnaSheet();
        // $sheets[] = new SatuanSheet();
        return $sheets;
    }
}

class Uploadsheet implements FromCollection, WithTitle, WithHeadings, ShouldAutoSize, WithStyles
{
    public function collection()
    {
        $data = tipe_kain::with('jenis', 'kategori_warna', 'warna', 'lebar', 'gramasi', 'satuan')
            ->where('id', 1212)
            ->get()
            ->map(function ($tipe, $index) {
                return [
                    $index + 1,
                    $tipe->jenis_kain_id,
                    $tipe->nama,
                    $tipe->barang_gramasi_id,
                    $tipe->barang_lebar_id,
                    $tipe->bagian,
                    $tipe->kategori_warna_id,
                    $tipe->warna_id,
                    $tipe->barang_satuan_id,
                    // strval($tipe->harga_default),
                    // strval($tipe->harga_final),
                    // $tipe->harga_roll,
                    // $tipe->harga_ecer,
                    $tipe->gambar,
                    $tipe->gambar_2,
                    $tipe->gambar_3,
                    // $tipe->basic_id,
                    // $tipe->spandex_id,
                    $tipe->qty_roll,
                    $tipe->deskripsi,
                    $tipe->karakteristik,
                    $tipe->panjang
                ];
            });

        return $data;
    }


    public function headings(): array
    {
        return [
            'NO',
            'ID JENIS KAIN',
            'NAMA',
            'ID GRAMASI',
            'ID LEBAR',
            'BAGIAN',
            'ID KAT WARNA',
            'ID WARNA',
            'ID SATUAN',
            // 'HARGA DEFAULT ',
            // 'HARGA FINAL',
            // 'HARGA ROLL',
            // 'HARGA ECER',
            'GAMBAR',
            'GAMBAR 2',
            'GAMBAR 3',
            // 'ID AKSESORIES BASIC',
            // 'ID AKSESORIES SPANDEX',
            'QTY AKTUAL',
            'DESKRIPSI',
            'KARAKTERISTIK',
            'PANJANG',
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
                    'height' => 40, // Tinggi baris heading menjadi 40 piksel
                ],
            ],
        ];
    }

    public function title(): string
    {
        return 'Upload';
    }
}

class AccesoriesSheet implements FromCollection, WithTitle, WithHeadings, ShouldAutoSize
{
    public function collection()
    {
        return TipeKain::with('jenis_kain', 'kategori_warna', 'warna', 'lebar', 'gramasi', 'satuan')
            ->where('bagian', 'accessories')
            ->get()
            ->map(function ($tipe) {
                return [
                    $tipe->id,
                    $tipe->nama,
                    $tipe->bagian,
                    $tipe->harga_roll,
                    $tipe->harga_ecer,
                ];
            });
    }

    public function headings(): array
    {
        return [
            'ID',
            'NAMA',
            'BAGIAN',
            'HARGA ROLL',
            'HARGA ECER',
        ];
    }

    public function title(): string
    {
        return 'Aksesoris';
    }
}

class JenisSheet implements FromCollection, WithTitle, WithHeadings, ShouldAutoSize
{
    public function collection()
    {
        return JenisKain::select('id', 'kode', 'nama', 'gambar', 'keterangan', 'katalog')
            ->get()
            ->map(function ($jenisKain) {
                return [
                    $jenisKain->id,
                    $jenisKain->nama,
                    $jenisKain->keterangan,
                ];
            });
    }
    public function headings(): array
    {
        return [
            'ID',
            'NAMA',
            'KETERANGAN',
        ];
    }

    public function title(): string
    {
        return 'Jenis';
    }
}

class WarnaSheet implements FromCollection, WithTitle, WithHeadings, ShouldAutoSize
{
    public function collection()
    {
        return Warna::select('id', 'parent_id', 'kode', 'nama', 'keterangan')
            ->where('parent_id', '!=', 0)
            ->get()
            ->map(function ($Warna) {
                return [
                    $Warna->id,
                    $Warna->nama,
                ];
            });
    }

    public function headings(): array
    {
        return [
            'ID',
            'NAMA',
        ];
    }

    public function title(): string
    {
        return 'Warna';
    }
}

class KatWarnaSheet implements FromCollection, WithTitle, WithHeadings, ShouldAutoSize
{
    public function collection()
    {
        return Warna::select('id', 'parent_id', 'kode', 'nama', 'keterangan')
            ->where('parent_id', '=', 0)
            ->get()
            ->map(function ($Warna) {
                return [
                    $Warna->id,
                    $Warna->nama,
                ];
            });
    }

    public function headings(): array
    {
        return [
            'ID',
            'NAMA',
        ];
    }

    public function title(): string
    {
        return 'Kat Warna';
    }
}

class LebarSheet implements FromCollection, WithTitle, WithHeadings, ShouldAutoSize
{
    public function collection()
    {
        return BarangLebar::select('id', 'kode', 'keterangan')
            ->get()
            ->map(function ($lebar) {
                return [
                    $lebar->id,
                    $lebar->keterangan,
                ];
            });
    }

    public function headings(): array
    {
        return [
            'ID',
            'NAMA',
        ];
    }

    public function title(): string
    {
        return 'Lebar';
    }
}

class GramasiSheet implements FromCollection, WithTitle, WithHeadings, ShouldAutoSize
{
    public function collection()
    {
        return BarangGramasi::select('id', 'kode', 'nama')
            ->get()
            ->map(function ($gramasi) {
                return [
                    $gramasi->id,
                    $gramasi->nama,
                ];
            });
    }

    public function headings(): array
    {
        return [
            'ID',
            'NAMA',
        ];
    }

    public function title(): string
    {
        return 'Gramasi';
    }
}

class SatuanSheet implements FromCollection, WithTitle, WithHeadings, ShouldAutoSize
{
    public function collection()
    {
        return BarangSatuan::select('id', 'kode', 'keterangan')
            ->get()
            ->map(function ($satuan) {
                return [
                    $satuan->id,
                    $satuan->keterangan,
                ];
            });
    }

    public function headings(): array
    {
        return [
            'ID',
            'NAMA',
        ];
    }

    public function title(): string
    {
        return 'Satuan';
    }
}

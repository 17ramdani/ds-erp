<?php

namespace App\Imports;

use App\Models\Kain\tipe_kain;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;


class TipeImport implements WithMultipleSheets
{
    public function sheets(): array
    {
        return [
            'Upload' => new MyImport(),
        ];
    }
}
class MyImport implements ToCollection
{

    public function collection(Collection $rows)
    {
        $dataRows = $rows->skip(1);
        foreach ($dataRows as $row) {
            tipe_kain::create([
                'kode' => tipe_kain::generateKode(),
                'jenis_kain_id' => $row[1],
                'nama' => $row[2],
                'barang_gramasi_id' => $row[3],
                'barang_lebar_id' => $row[4],
                'bagian' => $row[5],
                'kategori_warna_id' => $row[6],
                'warna_id' => $row[7],
                'barang_satuan_id' => $row[8],
                'set' => 'T',
                'harga_default' => 0,
                'harga_final' => 0,
                'harga_roll' =>  0,
                'harga_ecer' =>  0,
                'status' => 'A',
                'gambar' => $row[9],
                'gambar_2' => $row[10],
                'gambar_3' => $row[11],
                'basic_id' => 0,
                'spandex_id' => 0,
                'qty_roll' => $row[12],
                'deskripsi' => $row[13],
                'karakteristik' => $row[14],
                'panjang' => $row[15]
            ]);
        }
    }
}

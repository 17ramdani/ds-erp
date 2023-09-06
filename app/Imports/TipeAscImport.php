<?php

namespace App\Imports;

use App\Models\Barang\TipeAccessories;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class TipeAscImport implements WithMultipleSheets
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
            TipeAccessories::create([
                'tipe_kain_id' => $row[0],
                'accessories_id' => $row[4],
                'paket' => 0,
                'status' => 1,
            ]);
        }
    }
}

<?php

namespace App\Imports;

use App\Models\Barang\TipePrice;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class TipeHargaImport implements ToModel, WithStartRow
{
    public function startRow(): int
    {
        return 2;
    }
    public function model(array $row)
    {
        $tipe_kain_id = $row[0];
        $customer_category_id = $row[4];
        $periode = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[5]);
        $harga_roll = $row[6];
        $harga_ecer = $row[7];

        $tipePriceRoll = new TipePrice([
            'tipe_kain_id' => $tipe_kain_id,
            'customer_category_id' => $customer_category_id,
            'periode' => $periode,
            'tipe' => 'ROLL',
            'harga' => $harga_roll,
        ]);
        $tipePriceEcer = new TipePrice([
            'tipe_kain_id' => $tipe_kain_id,
            'customer_category_id' => $customer_category_id,
            'periode' => $periode,
            'tipe' => 'ECER',
            'harga' => $harga_ecer,
        ]);

        return [$tipePriceRoll, $tipePriceEcer];
    }
}

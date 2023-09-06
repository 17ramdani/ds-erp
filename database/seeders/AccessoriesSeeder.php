<?php

namespace Database\Seeders;

use App\Models\Kain\Accessories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccessoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Accessories::truncate();
        Accessories::upsert(
            [
                ['name' => 'RIB 1X1', 'kode' => 'ACC.1', 'type' => 'BASIC', 'harga_roll' => 10000, 'harga_ecer' => 7000],
                ['name' => 'RIB 1X1', 'kode' => 'ACC.2', 'type' => 'BASIC', 'harga_roll' => 12000, 'harga_ecer' => 3000],
                ['name' => 'RIB 1X1 (SPANDEX)', 'kode' => 'ACC.3', 'type' => 'SPANDEX', 'harga_roll' => 20000, 'harga_ecer' => 10000],
                ['name' => 'RIB 1X1', 'kode' => 'ACC.4', 'type' => 'BASIC', 'harga_roll' => 12000, 'harga_ecer' => 3000],
                ['name' => 'RIB 1X1 (SPANDEX)', 'kode' => 'ACC.5', 'type' => 'SPANDEX', 'harga_roll' => 20000, 'harga_ecer' => 10000],
                ['name' => 'KERAH MANSET', 'kode' => 'ACC.6', 'type' => 'BASIC', 'harga_roll' => 18000, 'harga_ecer' => 12000],
                ['name' => 'BUR 2X2', 'kode' => 'ACC.7', 'type' => 'BASIC', 'harga_roll' => 10000, 'harga_ecer' => 7000],
                ['name' => 'BUR 2X2', 'kode' => 'ACC.8', 'type' => 'BASIC', 'harga_roll' => 20000, 'harga_ecer' => 15000],
                ['name' => 'BUR 2X2 (SPANDEX)', 'kode' => 'ACC.9', 'type' => 'SPANDEX', 'harga_roll' => 28000, 'harga_ecer' => 20000],
                ['name' => 'BUR 2X2 (SPANDEX)', 'kode' => 'ACC.10', 'type' => 'SPANDEX', 'harga_roll' => 16000, 'harga_ecer' => 13000],
                ['name' => 'BUR 2X2', 'kode' => 'ACC.11', 'type' => 'BASIC', 'harga_roll' => 20000, 'harga_ecer' => 15000],
                ['name' => 'BUR 2X2', 'kode' => 'ACC.12', 'type' => 'BASIC', 'harga_roll' => 10000, 'harga_ecer' => 7000],
                ['name' => 'BUR 2X2 (SPANDEX)', 'kode' => 'ACC.13', 'type' => 'SPANDEX', 'harga_roll' => 28000, 'harga_ecer' => 20000],
                ['name' => 'BUR 2X2 (SPANDEX)', 'kode' => 'ACC.14', 'type' => 'SPANDEX', 'harga_roll' => 16000, 'harga_ecer' => 13000],
                ['name' => 'RIB 1X1', 'kode' => 'ACC.15', 'type' => 'BASIC', 'harga_roll' => 7000, 'harga_ecer' => 2000],
                ['name' => 'RIB 1X1', 'kode' => 'ACC.16', 'type' => 'BASIC', 'harga_roll' => 0, 'harga_ecer' => 0],


            ],
            ['kode'],
            ['name', 'type', 'harga_roll', 'harga_ecer']
        );
    }
}

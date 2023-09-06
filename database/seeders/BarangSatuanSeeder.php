<?php

namespace Database\Seeders;

use App\Models\Barang\BarangSatuan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BarangSatuan::truncate();

        BarangSatuan::upsert(
            [
                ['kode' => 'STN.1', 'keterangan' => 'KG'],
                ['kode' => 'STN.2', 'keterangan' => 'METER'],
                ['kode' => 'STN.3', 'keterangan' => 'YARD'],
                ['kode' => 'STN.4', 'keterangan' => 'ROLL'],
                ['kode' => 'STN.5', 'keterangan' => '-']

            ],
            ['kode'],
            ['keterangan']
        );
    }
}

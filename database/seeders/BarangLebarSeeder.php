<?php

namespace Database\Seeders;

use App\Models\Barang\BarangLebar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangLebarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BarangLebar::truncate();

        BarangLebar::upsert(
            [
                ['kode' => 'LB.1', 'keterangan' => '72"'],
                ['kode' => 'LB.2', 'keterangan' => '36"'],
                ['kode' => 'LB.3', 'keterangan' => '42"'],
                ['kode' => 'LB.4', 'keterangan' => '40"'],
                ['kode' => 'LB.5', 'keterangan' => '45"'],
                ['kode' => 'LB.6', 'keterangan' => '66"'],
                ['kode' => 'LB.7', 'keterangan' => '70"'],
                ['kode' => 'LB.8', 'keterangan' => '60"'],
                ['kode' => 'LB.9', 'keterangan' => '56"'],
                ['kode' => 'LB.10', 'keterangan' => '52"'],
                ['kode' => 'LB.11', 'keterangan' => '160CM'],
                ['kode' => 'LB.12', 'keterangan' => '70CM'],
                ['kode' => 'LB.13', 'keterangan' => '65CM'],
                ['kode' => 'LB.14', 'keterangan' => '200CM'],
                ['kode' => 'LB.15', 'keterangan' => '122CM'],
                ['kode' => 'LB.16', 'keterangan' => '148CM'],
                ['kode' => 'LB.17', 'keterangan' => '150 CM'],
                ['kode' => 'LB.18', 'keterangan' => '-']
            ],
            ['kode'],
            ['keterangan']
        );
    }
}

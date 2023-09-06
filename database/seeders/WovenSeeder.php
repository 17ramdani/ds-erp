<?php

namespace Database\Seeders;

use App\Models\Barang\TipeKain;
use App\Models\Barang\Warna;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WovenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Warna::upsert(
            [
                ['parent_id' => 498, 'kode' => 'WRN.498', 'nama' => '-', 'keterangan' => '-']
            ],
            ['kode'],
            ['nama', 'keterangan']
        );
        TipeKain::upsert(
            [
                ['kode' => 'TK.862', 'jenis_kain_id' => 9, 'kategori_warna_id' => 492, 'warna_id' => 492, 'barang_lebar_id' => 11, 'barang_gramasi_id' => 26, 'barang_satuan_id' => 4, 'set' => '-', 'nama' => 'A.DRYFIT DIAMOND PREMIUM 72"/140-150', 'harga_roll' =>  17000, 'harga_ecer' =>  22000, 'harga_default' =>  17000, 'harga_final' =>  17000, 'status' => 'AKTIF', 'gambar' =>  url('/storage/tipe-kain/default.jpg'), 'bagian' => 'body'],
                ['kode' => 'TK.863', 'jenis_kain_id' => 9, 'kategori_warna_id' => 492, 'warna_id' => 492, 'barang_lebar_id' => 12, 'barang_gramasi_id' => 26, 'barang_satuan_id' => 4, 'set' => '-', 'nama' => 'B.NYLON SPANDEX BRIGHT 60"/200-210', 'harga_roll' =>  65000, 'harga_ecer' =>  68000, 'harga_default' =>  65000, 'harga_final' =>  65000, 'status' => 'AKTIF', 'gambar' =>  url('/storage/tipe-kain/default.jpg'), 'bagian' => 'body'],
                ['kode' => 'TK.864', 'jenis_kain_id' => 9, 'kategori_warna_id' => 492, 'warna_id' => 492, 'barang_lebar_id' => 12, 'barang_gramasi_id' => 26, 'barang_satuan_id' => 4, 'set' => '-', 'nama' => 'C.NYLON SPANDEX DOFF 60"/200-210', 'harga_roll' =>  65000, 'harga_ecer' =>  68000, 'harga_default' =>  65000, 'harga_final' =>  65000, 'status' => 'AKTIF', 'gambar' =>  url('/storage/tipe-kain/default.jpg'), 'bagian' => 'body'],
                ['kode' => 'TK.865', 'jenis_kain_id' => 9, 'kategori_warna_id' => 492, 'warna_id' => 492, 'barang_lebar_id' => 12, 'barang_gramasi_id' => 26, 'barang_satuan_id' => 4, 'set' => '-', 'nama' => 'D.POLY SPANDEX 60"/210-215', 'harga_roll' =>  54000, 'harga_ecer' =>  57000, 'harga_default' =>  54000, 'harga_final' =>  54000, 'status' => 'AKTIF', 'gambar' =>  url('/storage/tipe-kain/default.jpg'), 'bagian' => 'body'],
                ['kode' => 'TK.866', 'jenis_kain_id' => 9, 'kategori_warna_id' => 492, 'warna_id' => 492, 'barang_lebar_id' => 13, 'barang_gramasi_id' => 27, 'barang_satuan_id' => 3, 'set' => '-', 'nama' => 'E.SPUNBOND 160CMX50GSM', 'harga_roll' =>  4000, 'harga_ecer' =>  7000, 'harga_default' =>  4000, 'harga_final' =>  4000, 'status' => 'AKTIF', 'gambar' =>  url('/storage/tipe-kain/default.jpg'), 'bagian' => 'body'],
                ['kode' => 'TK.867', 'jenis_kain_id' => 9, 'kategori_warna_id' => 492, 'warna_id' => 492, 'barang_lebar_id' => 14, 'barang_gramasi_id' => 27, 'barang_satuan_id' => 3, 'set' => '-', 'nama' => 'F.SPUNBOND 70CMX60GSM', 'harga_roll' =>  2000, 'harga_ecer' =>  5000, 'harga_default' =>  2000, 'harga_final' =>  2000, 'status' => 'AKTIF', 'gambar' =>  url('/storage/tipe-kain/default.jpg'), 'bagian' => 'body'],
                ['kode' => 'TK.868', 'jenis_kain_id' => 9, 'kategori_warna_id' => 492, 'warna_id' => 492, 'barang_lebar_id' => 15, 'barang_gramasi_id' => 27, 'barang_satuan_id' => 3, 'set' => '-', 'nama' => 'H.SPUNBOND 65CMX70GSM', 'harga_roll' =>  2000, 'harga_ecer' =>  5000, 'harga_default' =>  2000, 'harga_final' =>  2000, 'status' => 'AKTIF', 'gambar' =>  url('/storage/tipe-kain/default.jpg'), 'bagian' => 'body'],
                ['kode' => 'TK.869', 'jenis_kain_id' => 9, 'kategori_warna_id' => 492, 'warna_id' => 492, 'barang_lebar_id' => 15, 'barang_gramasi_id' => 27, 'barang_satuan_id' => 3, 'set' => '-', 'nama' => 'I.SPUNBOND WP ANTI BACTERIAL.200CMX50GSM ', 'harga_roll' =>  11000, 'harga_ecer' =>  14000, 'harga_default' =>  11000, 'harga_final' =>  11000, 'status' => 'AKTIF', 'gambar' =>  url('/storage/tipe-kain/default.jpg'), 'bagian' => 'body'],
                ['kode' => 'TK.870', 'jenis_kain_id' => 9, 'kategori_warna_id' => 492, 'warna_id' => 492, 'barang_lebar_id' => 11, 'barang_gramasi_id' => 26, 'barang_satuan_id' => 4, 'set' => '-', 'nama' => 'J.VOAL ULTRA SOFT 122CM/50-60 GSM', 'harga_roll' =>  26000, 'harga_ecer' =>  29000, 'harga_default' =>  26000, 'harga_final' =>  26000, 'status' => 'AKTIF', 'gambar' =>  url('/storage/tipe-kain/default.jpg'), 'bagian' => 'body'],
                ['kode' => 'TK.871', 'jenis_kain_id' => 9, 'kategori_warna_id' => 492, 'warna_id' => 492, 'barang_lebar_id' => 11, 'barang_gramasi_id' => 26, 'barang_satuan_id' => 4, 'set' => '-', 'nama' => 'K.VOAL ULTRA SOFT 148CM/60-70 GSM', 'harga_roll' =>  32000, 'harga_ecer' =>  35000, 'harga_default' =>  32000, 'harga_final' =>  32000, 'status' => 'AKTIF', 'gambar' =>  url('/storage/tipe-kain/default.jpg'), 'bagian' => 'body'],
                ['kode' => 'TK.872', 'jenis_kain_id' => 9, 'kategori_warna_id' => 492, 'warna_id' => 492, 'barang_lebar_id' => 17, 'barang_gramasi_id' => 26, 'barang_satuan_id' => 4, 'set' => '-', 'nama' => 'L.ARMANI SILK 150CM/60-150 GSM', 'harga_roll' =>  24000, 'harga_ecer' =>  27000, 'harga_default' =>  24000, 'harga_final' =>  24000, 'status' => 'AKTIF', 'gambar' =>  url('/storage/tipe-kain/default.jpg'), 'bagian' => 'body'],
                ['kode' => 'TK.873', 'jenis_kain_id' => 9, 'kategori_warna_id' => 492, 'warna_id' => 492, 'barang_lebar_id' => 17, 'barang_gramasi_id' => 26, 'barang_satuan_id' => 4, 'set' => '-', 'nama' => 'M.DIOR SILK 150CM/60-150 GSM', 'harga_roll' =>  18000, 'harga_ecer' =>  21000, 'harga_default' =>  18000, 'harga_final' =>  18000, 'status' => 'AKTIF', 'gambar' =>  url('/storage/tipe-kain/default.jpg'), 'bagian' => 'body'],
                ['kode' => 'TK.874', 'jenis_kain_id' => 9, 'kategori_warna_id' => 492, 'warna_id' => 492, 'barang_lebar_id' => 18, 'barang_gramasi_id' => 29, 'barang_satuan_id' => 1, 'set' => '0', 'nama' => '-', 'harga_roll' =>  0, 'harga_ecer' =>  0, 'harga_default' =>  0, 'harga_final' =>  0, 'status' => 'AKTIF', 'gambar' =>  url('/storage/tipe-kain/default.jpg'), 'bagian' => 'accessories'],

            ],
            ['kode'],
            ['keterangan']
        );
    }
}

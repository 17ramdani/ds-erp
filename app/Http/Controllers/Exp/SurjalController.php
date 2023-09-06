<?php

namespace App\Http\Controllers\Exp;

use App\Http\Controllers\Controller;
use App\Models\Exp\Delivery;
use Illuminate\Http\Request;

class SurjalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['datas'] = Delivery::with([
            'pesanan:id,nomor,customer_id,tanggal_pesanan,no_invoice,alamat_kirim' => [
                'customer:id,customer_category_id,nama'
            ]
        ])->selectRaw('id,no_sj,pesanan_id,jenis_faktur,status_sj')->latest()->get();
        // return response()->json($data, 200, [], JSON_PRETTY_PRINT);
        return view('wh.sj.surjal-index', $data);
    }

    public function detail(Request $request)
    {
        $request->validate(['id' => 'required|numeric']);
        $data['data'] = Delivery::with([
            'pesanan:id,nomor,customer_id,tanggal_pesanan,no_invoice,alamat_kirim' => [
                'customer:id,customer_category_id,nama,notlp,nohp',
                'details:id,pesanan_id,tipe_kain_id,harga,qty_act,barang_lot_id' => [
                    'tipe_kain:id,jenis_kain_id,kategori_warna_id,warna_id,barang_lebar_id,barang_gramasi_id,barang_satuan_id,nama' => [
                        'jenis:id,nama', 'lebar:id,keterangan', 'gramasi:id,nama', 'satuan:id,keterangan', 'warna:id,parent_id,nama', 'kategori_warna:id,nama'
                    ]
                ]
            ],

        ])
            ->selectRaw('id,no_sj,pesanan_id,jenis_faktur,status_sj')
            ->where('id', $request->id)->firstOrFail();
        // return response()->json($data, 200, [], JSON_PRETTY_PRINT);
        return view('wh.sj.surjal-detail', $data);
    }

    public function cetak(Request $request)
    {
        $request->validate(['id' => 'required|numeric']);
        $data['data'] = Delivery::with([
            'pesanan:id,nomor,customer_id,tanggal_pesanan,no_invoice,alamat_kirim' => [
                'customer:id,customer_category_id,nama,notlp,nohp',
                'details:id,pesanan_id,tipe_kain_id,harga,qty_act,barang_lot_id' => [
                    'tipe_kain:id,jenis_kain_id,kategori_warna_id,warna_id,barang_lebar_id,barang_gramasi_id,barang_satuan_id,nama' => [
                        'jenis:id,nama', 'lebar:id,keterangan', 'gramasi:id,nama', 'satuan:id,keterangan', 'warna:id,parent_id,nama', 'kategori_warna:id,nama'
                    ]
                ]
            ],

        ])
            ->selectRaw('id,no_sj,pesanan_id,jenis_faktur,status_sj')
            ->where('id', $request->id)->firstOrFail();
        // return response()->json($data, 200, [], JSON_PRETTY_PRINT);
        return view('wh.sj.surjal-print', $data);
    }

    public function laporan()
    {
        return view('exp.laporan-index');
    }
}

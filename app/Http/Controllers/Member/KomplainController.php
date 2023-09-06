<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Pesanan\Komplain;
use App\Models\Pesanan\KomplainDetail;
use App\Models\Pesanan\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KomplainController extends Controller
{
    function index(Request $request)
    {
        $soNumber = $request->sonumber ?? 'SO';
        $name = $request->name;
        $start = $request->start ?? '2023-07-01';
        $end = $request->end ?? date('Y-m-d');
        $data['komplain_count'] = DB::select('SELECT
            COUNT(*) AS total,
            COUNT(case when status="Diproses" then 1 end ) AS diproses,
            COUNT(case when status="Selesai" then 1 end ) AS selesai
            FROM komplains
            WHERE deleted_at IS NULL')[0];
        $data['komplains'] = Komplain::with([
            'pesanan' => function ($query) use ($soNumber, $name) {
                $query->where('nomor', 'like', '%' . $soNumber . '%')
                    ->with([
                        'customer' => function ($query) use ($name) {
                            $query->where('nama', 'like', '%' . $name . '%');
                        }
                    ]);
            }
        ])
            ->whereBetween('tanggal', [$start, $end])
            ->latest()->get();
        $data['sonumber'] = $soNumber;
        $data['name'] = $name;
        $data['start'] = $start;
        $data['end'] = $end;
        return view('cust.komplain.index', $data);
    }
    function edit($id)
    {
        $komplain = Komplain::find($id);
        if (!isset($komplain)) {
            return abort(404);
        }
        $pesanan_id = $komplain->pesanan_id;
        $data['komplain'] = $komplain;
        $data['dpids'] = KomplainDetail::where('komplain_id', $id)->pluck('detail_pesanan_id');
        $data['pesanan'] = Pesanan::with([
            "customer:id,customer_category_id,nama" => [
                "category:id,nama"
            ],
            "salesman:id,nama",
            "details" => [
                "tipe_kain" => function ($query) {
                    $query
                        ->selectRaw('id,kode,jenis_kain_id,kategori_warna_id,warna_id,barang_lebar_id,barang_gramasi_id,barang_satuan_id,
                            nama')
                        ->orderBy('id', 'asc')->with([
                            "lebar:id,keterangan",
                            "gramasi:id,nama",
                            "warna:id,nama",
                            "kategori_warna:id,nama"
                        ]);
                },
                'warna_pesanan:id,nama',
                'tipe_kain_accessories' => [
                    'accessories',
                ]
            ]
        ])->where("id", $pesanan_id)
            ->selectRaw('id,nomor,customer_id,sales_man_id,customer_service_id,tanggal_pesanan,tipe_pesanan
            ,kategori_pesanan,jenis_pesanan,target_pesanan,status_pesanan_id,status_kode,dp,ongkir,total,no_invoice,pelunasan,sisa_bayar,
            alamat_kirim,catatan,catatan_cs,bukti_transfer,bukti_pelunasan')
            ->firstOrFail();
        return view('cust.komplain.detail', $data);
        // return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }

    function store(Request $request)
    {
        $request->validate([
            'kid' => ['required'],
            'komplain_status' => ['required'],
            'dp_id.*' => ['required'],
            'analisa_input' => ['required'],
            'tindakan_input' => ['required'],
        ]);
        $komplain = Komplain::find($request->kid);
        $komplain->status = $request->komplain_status;
        $komplain->analisa = $request->analisa_input;
        $komplain->tindakan = $request->tindakan_input;
        $komplain->save();
        if (isset($request->dp_id)) {
            //first delete all existing data
            KomplainDetail::where('komplain_id', $komplain->id)->delete();
            //then insert again
            for ($i = 0; $i < count($request->dp_id); $i++) {
                KomplainDetail::create([
                    'komplain_id' => $komplain->id,
                    'detail_pesanan_id' => $request->dp_id[$i]
                ]);
            }
        }

        if (isset($request->but_save)) {
            return back()->with('success', 'Data berhasil disimpan.');
        }
        return redirect()->route('komplain.index')->with('success', 'Data berhasil disimpan.');
    }

    function show($id)
    {
        $data['komplain'] = Komplain::with([
            'pesanan:id,nomor,customer_id' => [
                'customer:id,nama,notlp,nohp'
            ],
            'komplain_details' => [
                'detail:id,pesanan_id,tipe_kain_id,qty,qty_act,satuan,bagian,warna_id,barang_lot_id' => [
                    'tipe_kain:id,kategori_warna_id,warna_id,barang_lebar_id,barang_gramasi_id,nama' => [
                        "lebar:id,keterangan",
                        "gramasi:id,nama",
                        "warna:id,nama",
                        "kategori_warna:id,nama"
                    ],
                    'warna_pesanan:id,nama',
                    'tipe_kain_accessories' => [
                        'accessories',
                    ]
                ]
            ]
        ])
            ->where('id', $id)->firstOrFail();
        // return response()->json($data, 200, [], JSON_PRETTY_PRINT);
        return view('cust.komplain.cetak', $data);
    }
}

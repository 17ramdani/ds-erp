<?php

namespace App\Http\Controllers\SM;

use App\Http\Controllers\Controller;
use App\Models\SM\Retur;
use App\Models\SM\ReturDetail;
use App\Models\User;
use Illuminate\Http\Request;

class ReturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $customer = $request->customer;
        $so = $request->so;
        if (isset($customer) or isset($so)) {
            $data['datas'] = Retur::with([
                'pesanan' => function ($query) use ($so, $customer) {
                    $query->selectRaw('id,nomor,customer_id,tanggal_pesanan,no_invoice,alamat_kirim')
                        ->where('nomor', 'like', '%' . $so . '%')
                        ->with(['customer' => function ($query) use ($customer) {
                            $query->selectRaw('id,customer_category_id,nama')
                                ->where('nama', 'like', '%' . $customer . '%');
                        }]);
                }
            ])->selectRaw('id,tanggal,pesanan_id,jenis_retur,status')->latest()->get();
        } else {
            $data['datas'] = Retur::with([
                'pesanan:id,nomor,customer_id,tanggal_pesanan,no_invoice,alamat_kirim' => [
                    'customer:id,customer_category_id,nama'
                ]
            ])->selectRaw('id,tanggal,pesanan_id,jenis_retur,status')->latest()->get();
        }
        $data['customer'] = $customer;
        $data['so'] = $so;
        $data['count_total'] = Retur::count();
        $data['count_gb'] = Retur::where('jenis_retur', 'Ganti Barang')->count();
        $data['count_dep'] = Retur::where('jenis_retur', 'Deposit')->count();
        // return response()->json($data, 200, [], JSON_PRETTY_PRINT);
        return view('sm.retur.index', $data);
    }
    public function index_jenis(Request $request)
    {
        $customer = $request->customer;
        $so = $request->so;
        $jenis = $request->jenis;
        if (isset($customer) or isset($so)) {
            $data['datas'] = Retur::with([
                'pesanan' => function ($query) use ($so, $customer) {
                    $query->selectRaw('id,nomor,customer_id,tanggal_pesanan,no_invoice,alamat_kirim')
                        ->where('nomor', 'like', '%' . $so . '%')
                        ->with(['customer' => function ($query) use ($customer) {
                            $query->selectRaw('id,customer_category_id,nama')
                                ->where('nama', 'like', '%' . $customer . '%');
                        }]);
                }
            ])->selectRaw('id,tanggal,pesanan_id,jenis_retur,status,updated_at')
                ->where('jenis_retur', 'like', '%' . $jenis . '%')->latest()->get();
        } else {
            $data['datas'] = Retur::with([
                'pesanan:id,nomor,customer_id,tanggal_pesanan,no_invoice,alamat_kirim' => [
                    'customer:id,customer_category_id,nama'
                ]
            ])->selectRaw('id,tanggal,pesanan_id,jenis_retur,status,updated_at')->where('jenis_retur', 'like', '%' . $jenis . '%')->latest()->get();
        }
        $data['customer'] = $customer;
        $data['so'] = $so;
        $data['jenis'] = $jenis;
        $data['count_draft'] = Retur::where([['jenis_retur', 'like', '%' . $jenis . '%'], ['status', 'Draft']])->count();
        $data['count_oncheck'] = Retur::where([['jenis_retur', 'like', '%' . $jenis . '%'], ['status', 'On Check']])->count();
        $data['count_tk'] = Retur::where([['jenis_retur', 'like', '%' . $jenis . '%'], ['status', 'Tunggu Konfirmasi']])->count();
        $data['count_dikirim'] = Retur::where([['jenis_retur', 'like', '%' . $jenis . '%'], ['status', 'Dikirim']])->count();
        $data['count_selesai'] = Retur::where([['jenis_retur', 'like', '%' . $jenis . '%'], ['status', 'Selesai']])->count();
        // return response()->json($data, 200, [], JSON_PRETTY_PRINT);
        return view('sm.retur.index-jenis', $data);
    }

    public function so_detail(Request $request, $id)
    {
        $data = Retur::with([
            'pesanan:id,nomor,customer_id,sales_man_id,tanggal_pesanan,no_invoice,alamat_kirim,catatan_cs' => [
                'customer:id,customer_category_id,nama',
                "details:id,pesanan_id,tipe_kain_id,qty_act,harga,jenis_disc,total_disc,barang_lot_id,updated_at,updated_by" => [
                    'tipe_kain:id,jenis_kain_id,kategori_warna_id,warna_id,barang_lebar_id,barang_gramasi_id,barang_satuan_id,nama' => [
                        'jenis:id,nama', 'lebar:id,keterangan', 'gramasi:id,nama', 'satuan:id,keterangan', 'warna:id,parent_id,nama', 'kategori_warna:id,nama'
                    ]
                ],
                'salesman:id,nama'
            ]
        ])->selectRaw('id,tanggal,pesanan_id,jenis_retur,status,updated_at,deskripsi,photos')
            ->where('id', $id)
            ->firstOrFail();
        // $pesanan_id = $data['pesanan']->id;
        $retur_details = ReturDetail::where('retur_id', $id)->get();
        // return response()->json($data, 200, [], JSON_PRETTY_PRINT);
        return view('sm.retur.so-detail', ['data' => $data, 'retur_details' => $retur_details]);
    }

    public function retur_detail_store(Request $request, $id)
    {
        $request->validate([
            'dp_id.*' => ['required']
        ]);
        if (!isset($request->dp_id)) {
            return back()->with('error', 'Item belum di checklist');
        }
        if (isset($request->but_save)) {
            for ($i = 0; $i < count($request->dp_id); $i++) {
                $rd = ReturDetail::where([['retur_id', $id], ['detail_pesanan_id', $request->dp_id[$i]]])->first();
                if (!isset($rd)) {
                    ReturDetail::create([
                        'retur_id' => $id,
                        'detail_pesanan_id' => $request->dp_id[$i],
                        'lot_id' => 0,
                        'qty' => 0,
                        'qty_act' => 0,
                        'total_harga' => 0
                    ]);
                }
            }

            return back()->with('success', 'Nota retur telah berhasil dibuat.');
        } else {
            return view('sm.retur.retur-create');
        }
    }

    function retur_cetak($id)
    {
        $data['data'] = Retur::with([
            'pesanan' => [
                'customer'
            ],
            'retur_details' => [
                'detail_pesanan' => [
                    'tipe_kain' => [
                        'warna'
                    ]
                ]
            ]
        ])
            ->where('id', $id)->firstOrFail();

        // return response()->json($data, 200, [], JSON_PRETTY_PRINT);
        return view('sm.retur.retur-cetak', $data);
    }
    public function detail()
    {
        return view('sm.retur.detail');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
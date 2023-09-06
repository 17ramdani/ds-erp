<?php

namespace App\Http\Controllers\SM;

use App\Http\Controllers\Controller;
use App\Models\Pesanan\Pesanan;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (isset($request->customer) or isset($request->po)) {
            $customer = $request->customer;
            $po = $request->po;
            $data['datas'] = Pesanan::with([
                "customer" => function ($query) use ($customer) {
                    // $morphTo->constrain([

                    // ])
                    $query->selectRaw('id, customer_category_id, nama')
                        ->where('nama', 'like', '%' . $customer . '%')
                        ->with("category:id,nama");
                },
                "details:id,pesanan_id,tipe_kain_id,harga,qty_act"
            ])->select('id', 'nomor', 'customer_id', 'tanggal_pesanan', 'no_invoice')
                ->where('nomor', 'like', '%' . $po . '%')
                ->whereNotIn('status_kode', ['Draft', 'Approved'])
                ->latest()->get();
        } else {
            $data['datas'] = Pesanan::with([
                "customer:id,customer_category_id,nama" => [
                    "category:id,nama"
                ],
                "details:id,pesanan_id,tipe_kain_id,harga,qty_act"
            ])->select('id', 'nomor', 'customer_id', 'tanggal_pesanan', 'dp', 'no_invoice', 'bukti_transfer', 'bukti_pelunasan')
                ->whereNotIn('status_kode', ['Draft', 'Approved'])
                ->latest()->get();
        }
        $data['customer'] = $request->customer;
        $data['po'] = $request->po;
        // return response()->json($data, 200, [], JSON_PRETTY_PRINT);
        return view('sm.invoice-index', $data);
    }

    public function detail(Request $request)
    {
        $request->validate([
            'id' => ['required', 'numeric']
        ]);
        $pesanan = Pesanan::with([
            "customer:id,customer_category_id,nama,notlp,nohp" => [
                "category:id,nama"
            ],
            "details" => function ($query) {
                $query->where('bagian', 'body')->selectRaw('id,pesanan_id,tipe_kain_id,qty_act,harga,jenis_disc,total_disc')
                    ->with([
                        'tipe_kain:id,jenis_kain_id,kategori_warna_id,warna_id,barang_lebar_id,barang_gramasi_id,barang_satuan_id,nama' => [
                            'jenis:id,nama', 'lebar:id,keterangan', 'gramasi:id,nama', 'satuan:id,keterangan', 'warna:id,parent_id,nama', 'kategori_warna:id,nama'
                        ]
                    ]);
            },
            "detail_accs" => function ($query) {
                $query->where('bagian', 'accessories')
                    ->selectRaw('id,pesanan_id,tipe_kain_id,qty_act,harga,jenis_disc,total_disc,warna_id')
                    ->with(['tipe_kain_accessories' => ['accessories'], 'warna_pesanan']);
            }
        ])->select('id', 'nomor', 'customer_id', 'tanggal_pesanan', 'no_invoice', 'alamat_kirim', 'is_lunas', 'dp', 'ongkir', 'bukti_transfer', 'bukti_pelunasan')
            ->where('id', $request->id)
            ->firstOrFail();
        // return response()->json(['pesanan' => $pesanan], 200, [], JSON_PRETTY_PRINT);
        return view('sm.invoice-detail', ['pesanan' => $pesanan]);
    }

    function updateStatus(Request $request)
    {
        $request->validate([
            'id' => ['required', 'numeric'],
            'status' => ['required', 'numeric']
        ]);
        $pesanan = Pesanan::find($request->id);
        $pesanan->is_lunas = $request->status;
        $pesanan->save();
        return back()->with('success', 'Status invoice berhasil diperbaharui');
    }

    function cetak(Request $request)
    {
        $request->validate([
            'id' => ['required', 'numeric']
        ]);
        $pesanan = Pesanan::with([
            "customer:id,customer_category_id,nama,notlp,nohp" => [
                "category:id,nama"
            ],
            "details" => function ($query) {
                $query->where('bagian', 'body')->selectRaw('id,pesanan_id,tipe_kain_id,qty_act,harga,jenis_disc,total_disc')
                    ->with([
                        'tipe_kain:id,jenis_kain_id,kategori_warna_id,warna_id,barang_lebar_id,barang_gramasi_id,barang_satuan_id,nama' => [
                            'jenis:id,nama', 'lebar:id,keterangan', 'gramasi:id,nama', 'satuan:id,keterangan', 'warna:id,parent_id,nama', 'kategori_warna:id,nama'
                        ]
                    ]);
            },
            "detail_accs" => function ($query) {
                $query->where('bagian', 'accessories')
                    ->selectRaw('id,pesanan_id,tipe_kain_id,qty_act,harga,jenis_disc,total_disc,warna_id')
                    ->with(['tipe_kain_accessories' => ['accessories'], 'warna_pesanan']);
            }
        ])->select('id', 'nomor', 'customer_id', 'sales_man_id', 'tanggal_pesanan', 'no_invoice', 'alamat_kirim', 'is_lunas', 'dp', 'ongkir', 'bukti_transfer', 'bukti_pelunasan')
            ->where('id', $request->id)
            ->firstOrFail();
        return view('sm.inc.modalPrintInvoice', ['pesanan' => $pesanan]);
        // return response()->json(['pesanan' => $pesanan], 200, [], JSON_PRETTY_PRINT);
    }
}

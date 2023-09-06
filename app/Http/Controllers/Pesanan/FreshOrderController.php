<?php

namespace App\Http\Controllers\Pesanan;

use App\Http\Controllers\Controller;
use App\Models\Penjualan\Salesman;
use App\Models\Pesanan\PesananDev;
use App\Models\Pesanan\PesananDevAcc;
use App\Models\Pesanan\PesananDevDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Helpers\CurrencyToInteger;

class FreshOrderController extends Controller
{
    function index(Request $request)
    {
        $soNumber = $request->sonumber;
        if (isset($soNumber)) {
            $param = ['nomor', 'like', '%' . $soNumber . '%'];
        } else {
            $param = ['inq_number', 'like', '%'];
        }
        $name = $request->name;
        $start = $request->start ?? '2023-07-01';
        $end = $request->end ?? date('Y-m-d');
        $data['sonumber'] = $soNumber;
        $data['name'] = $name;
        $data['start'] = $start;
        $data['end'] = $end;
        $data['pesanan_count'] = DB::select('SELECT
            COUNT(*) AS total_so,
            COUNT(case when `status`="Draft" then 1 end ) AS draft,
            COUNT(case when `status`="Approved" then 1 end ) AS approve,
            COUNT(case when `status`="WIP" then 1 end ) AS wip,
            COUNT(case when `status`="Invoicing" then 1 end ) AS invoicing,
            COUNT(case when `status`="Delivery" then 1 end ) AS dilevery,
            COUNT(case when `status`="Done" then 1 end ) AS done
            FROM pesanan_devs
            WHERE deleted_at IS NULL')[0];
        $data['orders'] = PesananDev::with(['customer' => function ($q) use ($name) {
            $q->select('id', 'nama')->where('nama', 'like', '%' . $name . '%');
        }])
            ->where([$param])
            ->whereBetween('tanggal', [$start, $end])
            ->orderBy('tanggal', 'DESC')->get();
        // return response()->json($data, 200, [], JSON_PRETTY_PRINT);
        return view('pesanan.fo.index', $data);
    }

    function show($id)
    {
        $data['order'] = PesananDev::with(
            'customer:id,nama,notlp,nohp',
            'accs:id,pesanan_dev_id,accessories,qty'
        )
            ->where('id', $id)
            ->firstOrFail();
        // return response()->json($data, 200, [], JSON_PRETTY_PRINT);
        return view('pesanan.fo.show', $data);
    }
    function edit($id)
    {
        $order = PesananDev::find($id);
        $details = PesananDevDetail::where('pesanan_dev_id', $id)->get();
        if (count($details) <= 0) {
            $accs = PesananDevAcc::where('pesanan_dev_id', $id)->get();
            //GENERATE PESANAN ITEM ROLL
            $qtyRoll = $order->qty;
            for ($i = 0; $i < $qtyRoll; $i++) {
                PesananDevDetail::create([
                    'pesanan_dev_id' => $order->id,
                    'bagian' => 'Body',
                    'nama' => $order->tipe_kain,
                    'gramasi' => $order->gramasi,
                    'lebar' => $order->lebar,
                    'warna' => $order->warna,
                    'qty' => 1,
                ]);
            }
            //GENERATE ACCORIES ITEM
            foreach ($accs as $key => $acc) {
                PesananDevDetail::create([
                    'pesanan_dev_id' => $order->id,
                    'bagian' => 'Accessories',
                    'nama' => $acc->accessories,
                    'gramasi' => "-",
                    'lebar' => '-',
                    'warna' => $order->warna,
                    'qty' => $acc->qty,
                ]);
            }
            //GENERATE FO NUMBER
            $order->nomor = 'SO.' . date('YmdHis');
            $order->save();
        }
        $data['order'] = PesananDev::with([
            'customer:id,nama',
            'details'
        ])
            ->where('id', $id)
            ->firstOrFail();

        $data['salesmans'] = Salesman::select('id', 'nama')->get();
        // return response()->json($data, 200, [], JSON_PRETTY_PRINT);
        return view('pesanan.fo.edit', $data);
    }

    function update(Request $request, $id)
    {
        $pddids = $request->dids;
        $qty_act = 0;

        for ($i = 0; $i < count($pddids); $i++) {
            $did = $request->dids[$i];
            PesananDevDetail::where('id', $did)->update([
                'kode' => $request->kode[$i],
                'nama' => $request->nama[$i],
                'gramasi' => $request->gramasi[$i],
                'lebar' => $request->lebar[$i],
                'gramasi' => $request->gramasi[$i],
                'kategori_warna' => $request->katwarna[$i],
                'qty_act' => $request->qtyact[$i],
                'harga' => CurrencyToInteger($request->harga[$i]),
                'subtotal' => CurrencyToInteger($request->subtotal[$i]),
            ]);
            $qty_act += $request->qtyact[$i];
        }

        PesananDev::where('id', $id)->update([
            'qty_act' => $qty_act,
            'status' => $request->status,
            'tipe_pesanan' => $request->tipe_pesanan,
            'jenis_pesanan' => $request->jenis_pesanan,
            'kategori_pesanan' => $request->kategori_pesanan,
            'tanggal_kirim' => $request->tanggal_kirim,
            'catatan_admin' => $request->catatan_admin,
            'sales_man_id' => $request->sales_man_id,
            'total' => CurrencyToInteger($request->total),
            'ongkir' => CurrencyToInteger($request->ongkir),
            'grand_total' => CurrencyToInteger($request->grand_total),
            'dp' => CurrencyToInteger($request->dp),
            'pelunasan' => CurrencyToInteger($request->pelunasan),
            'sisa_pembayaran' => CurrencyToInteger($request->sisa_pembayaran),
        ]);
        // return CurrencyToInteger($request->ongkir) . "-" . $request->total;
        if (isset($request->but_save)) {
            return back()->with('success', 'Data berhasil disimpan.');
        } else {
            return redirect()->route('fresh-order.index')->with('success', 'Data berhasil disimpan.');
        }
    }
    function cetak($id)
    {
        $data['order'] = PesananDev::with([
            'customer:id,nama',
            'details'
        ])
            ->where('id', $id)
            ->firstOrFail();
        // return response()->json($data, 200, [], JSON_PRETTY_PRINT);
        return view('pesanan.fo.cetak', $data);
    }
}

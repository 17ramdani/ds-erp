<?php

namespace App\Http\Controllers\cust;

use App\Http\Controllers\Controller;
use App\Models\Financing\Financing;
use App\Models\pesanan\DetailPesanan;
use App\Models\Pesanan\Pesanan;
use Illuminate\Http\Request;

class FinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Financing::with('customer')->latest()->get();
        // return response()->json($data, 200, [], JSON_PRETTY_PRINT);
        return view('cust.fin-index', [
            'financing' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function approval(Financing $keyid)
    {
        $id         = $keyid['id'];
        $pesanan_id = $keyid['pesanan_id'];
        $data['buyer_financing'] = Financing::with([
            "customer" => [
                "category",
            ]
        ])->where('id', $id)->firstOrFail();
        $data['kebutuhan_bahan'] = DetailPesanan::with([
            "tipe_kain" => [
                "lebar",
                "gramasi",
                "warna"
            ],
            'warna_pesanan'
        ])->where([["pesanan_id", $pesanan_id], ["bagian", '!=', 'accessories']])->get();

        // return response()->json($data, 200, [], JSON_PRETTY_PRINT);
        return view('cust.fin-approval', $data);
    }

    public function approval_financing(Request $request)
    {
        $id         = $request->id;
        $id_pesanan = $request->pesanan_id;
        $datafin    = Financing::where('id', $id)->first();
        $nominal    = $datafin['datafin'];

        //update status buyer_financing
        Financing::where('id', $id)->update([
            'status' => 1,
        ]);

        //update pesanan
        pesanan::where('id', $id_pesanan)->update([
            'status_pesanan_id' => 3,
            'status_kode'       => 'Invoicing',
            // 'total'         => $nominal,
        ]);

        // return response()->json($datafin, 200, [], JSON_PRETTY_PRINT);
        return redirect()->back()->with('success', 'Bayar financing berhasil di approved!');
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

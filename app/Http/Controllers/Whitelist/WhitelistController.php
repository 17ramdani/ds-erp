<?php

namespace App\Http\Controllers\Whitelist;

use App\Http\Controllers\Controller;
use App\Models\Whitelist\Whitelist;
use App\Models\Keranjang;
use Illuminate\Http\Request;

class WhitelistController extends Controller
{

    public function index(){
        $customer_id = auth()->user()->customer_id;
        $datas = Whitelist::with([
            'tipe_kain' => [
                "lebar", "gramasi", "warna", "satuan"
            ]
        ])->where([
            ['customer_id', $customer_id], ['checkout', 0]
        ])->get();
        return response()->json([
            'datas' => $datas
        ], 200, [], JSON_PRETTY_PRINT);
    }

    function store(Request $request, $tipe_kain_id)
    {

        $customer_id = auth()->user()->customer_id;
        $whitelist = Whitelist::where([
            ['tipe_kain_id', $tipe_kain_id], ['customer_id', $customer_id], ['checkout', 0]
        ])->first();
        if (!isset($whitelist)) {
            Whitelist::create([
                'tipe_kain_id' => $tipe_kain_id,
                'customer_id' => $customer_id,
                'checkout' => 0,
                'qty' => $request->qty,
                'created_by' => auth()->user()->id
            ]);
        } else {
            Whitelist::where([
                ['tipe_kain_id', $tipe_kain_id], ['customer_id', $customer_id], ['checkout', 0]
            ])->update([
                'qty' => $whitelist->qty + $request->qty
            ]);
        }
        return response()->json([
            'message' => 'Barang ditambahkan ke whitelist.'
        ]);
    }

    public function destroy($id){
        Whitelist::where('id', $id)->delete();
        return response()->json([
            'message' => 'Barang dihapus dari whitelist.'
        ]);
    }

}
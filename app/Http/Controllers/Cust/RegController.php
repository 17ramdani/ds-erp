<?php

namespace App\Http\Controllers\cust;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Membership\Membership;
use App\Models\customer\customer;

class RegController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cust.reg-index', [
            'cmember' => Membership::latest()->get()
        ]);
        // return response()->json(Membership::latest()->get(), 200, [], JSON_PRETTY_PRINT);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function approval(Membership $keyid)
    {
        $customer_id = $keyid['customer_id'];
        $data['membership'] = Membership::with('customer')->where('customer_id', $customer_id)->firstOrFail();

        // return response()->json($data, 200, [], JSON_PRETTY_PRINT);
        return view('cust.reg-approval', [
            'title'         => 'Detail Customer',
            'member'        => $keyid,
            'data_member'   => $data,
        ]);
    }

    public function approved_bayar(Request $request)
    {
        // return response()->json($request, 200, [], JSON_PRETTY_PRINT);
        Membership::where('id', $request->id)->update([
            'status_bayar'  => $request->status_bayar,
            'tgl_bayar'    => date('Y-m-d'),
        ]);

        return redirect()->back()->with('success', 'Pembayaran berhasil di simpan!');
    }

    public function approved_member(Request $request)
    {
        Membership::where('id', $request->id)->update([
            'expired_at'    => date('Y-m-d H:i:s', strtotime('+1 year', strtotime($request->joinat))),
            'status'     => 2
        ]);

        customer::where('id', $request)->update([
            'customer_category_id'  => 3,
        ]);

        return redirect()->back()->with('success', 'Member berhasil di Approved!');
        // return response()->json($where, 200, [], JSON_PRETTY_PRINT);
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

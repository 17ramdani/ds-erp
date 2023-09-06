<?php

namespace App\Http\Controllers\Cust;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ticketing\Ticketing;
use App\Models\Ticketing\TindakLanjut;

class TicketingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['jumlah_keluhan'] = Ticketing::get()->count();
        $data['jumlah_open'] = Ticketing::where('status', 1)->count();
        $data['jumlah_prosess'] = Ticketing::where('status', 2)->count();
        $data['jumlah_done'] = Ticketing::where('status', 3)->count();
        $data['ticketing']  = Ticketing::get();
        return view('cust.ticketing-index', $data);

        // return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }

    public function ticketing_index(Ticketing $keyid)
    {

        $compt_id = $keyid['customer_id'];
        return view('cust.ticketing-followUp-index', [
            'dtict' => $keyid,
            'tdnkl' => TindakLanjut::get()->where('customer_id', $compt_id)
        ]);
    }

    public function ticketing_add(Ticketing $keyid)
    {
        return view('cust.ticketing-followUp-add', [
            'dtict' => $keyid,
        ]);

        // return response()->json($keyid, 200, [], JSON_PRETTY_PRINT);
    }


    public function add_followup(Request $request)
    {
        // $validate_data = $request->validate([
        //     'name'         => 'required|max:255',
        // ]);
        $no_pesanan = $request->no_pesanan;

        //update ticketing user
        Ticketing::where('no_pesanan', $no_pesanan)->update([
            'customer_service_id'   => $request->cs,
            'status'                => $request->status,
        ]);

        $inputkeun = [
            'customer_id'           => $request->customer_id,
            'complaint_id'          => $request->keluhan_id,
            'tindak_lanjut'         => $request->tindak_lanjut,
            'tanggal_tindak_lanjut' => $request->tg_tindak_lanjut,
            'created_at'            => date('Y-m-d H:i:s'),
        ];

        TindakLanjut::create($inputkeun);

        // return redirect()->back()->with('success', 'Member berhasil di Approved!');
        return redirect("/detail-ticketing/$request->keluhan_id")->with('success', 'Keluhan customer berhasil dikirim ke CS !');
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

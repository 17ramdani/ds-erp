<?php

namespace App\Http\Controllers\cust;

use App\Http\Controllers\Controller;
use App\Models\Pesanan\Pesanan;
use App\Models\Pesanan\CustomerExperience;
use App\Models\customer\customer;
use Illuminate\Http\Request;

class NpsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //count
        $pesanan_selesai = pesanan::where('status_pesanan_id', '5')->count();
        $satu = CustomerExperience::where('star', '1')->count();
        $dua = CustomerExperience::where('star', '2')->count();
        $tiga = CustomerExperience::where('star', '3')->count();
        $empat = CustomerExperience::where('star', '4')->count();
        $lima = CustomerExperience::where('star', '5')->count();
        $data = CustomerExperience::with('customer', 'pesanan')->orderByDesc('customer_id')->latest()->get();


        return view('cust.nps-index', [
            'satu' => $satu,
            'dua' => $dua,
            'tiga' => $tiga,
            'empat' => $empat,
            'lima' => $lima,
            'data' => $data,
            'pesanan_selesai' => $pesanan_selesai,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

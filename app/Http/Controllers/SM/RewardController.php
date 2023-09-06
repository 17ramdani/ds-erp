<?php

namespace App\Http\Controllers\SM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reward\RewardPoint;

class RewardController extends Controller
{
    public function index()
    {
        $data['tot_merchant'] = RewardPoint::get()->count();
        $data['merchant']     = RewardPoint::get();
        return view('sm.reward-merchartPoint', $data);
    }

    public function add()
    {
        return view('sm.reward-merchartPoint-add');
    }

    public function store(Request $request)
    {
        // Validasi disini
        $xyz    = "1";
        $file = $request->file('file_merchant');
        $nama_file = $xyz . "_" . $file->getClientOriginalName();

        if ($file) {
            $tujuan_upload = 'image-merchant';
            $file->move($tujuan_upload, $nama_file);
        }

        $inputkeun = [
            'merchant_id'       => 1,
            'voucher_name'      => $request->nama_merchant,
            'amount'            => $request->point_merchant,
            'image'             => $nama_file,
        ];
        RewardPoint::create($inputkeun);
        return redirect('/reward-merchartPoint')->with('success', 'Voucher berhasil disimpan !');
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

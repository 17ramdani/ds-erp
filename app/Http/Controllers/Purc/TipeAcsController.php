<?php

namespace App\Http\Controllers\purc;

use App\Exports\TipeAccExport;
use App\Http\Controllers\Controller;
use App\Imports\TipeAscImport;
use App\Models\barang\Accessories;
use App\Models\barang\TipeAccessories;
use App\Models\kain\jenis_kain;
use App\Models\kain\tipe_kain;
use App\Models\kain\warna;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class TipeAcsController extends Controller
{
    public function getTipeKain(Request $request)
    {
        $jenisKainId = $request->input('jenis_kain_id');
        $tipeKain = tipe_kain::where('jenis_kain_id', $jenisKainId)
            ->select('nama')
            ->groupBy('nama')
            ->get();
        return response()->json($tipeKain);
    }

    public function index(Request $request)
    {
        $jenis=jenis_kain::all();
        $warna=warna::all();
        $acs=Accessories::all();

        $jenisKainId = request('jenis_kain_id');
        $tipeKain = request('tipe_kain');
        $kategoriWarnaId = request('kategori_warna_id');
        $accessoriesId = request('accessories_id');

        $query = TipeAccessories::query();

        if ($jenisKainId) {
            $query->whereHas('tipeKain', function ($q) use ($jenisKainId, $tipeKain) {
                $q->where('jenis_kain_id', $jenisKainId)->where('nama', $tipeKain);
            });
        }

        if ($kategoriWarnaId) {
            $query->whereHas('tipeKain', function ($q) use ($kategoriWarnaId) {
                $q->where('kategori_warna_id', $kategoriWarnaId);
            });
        }

        if ($accessoriesId) {
            $query->where('accessories_id', $accessoriesId);
        }

        $tipePrices = $query->get();

        return view('purc.tipe-acs.index', compact('tipePrices','jenis','warna','acs'));
    }

    public function create()
    {
        //
    }

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
    public function import_index()
    {
        return view('purc.tipe-acs.import');
    }

    public function export()
    {
        ob_end_clean();
        ob_start();
        return Excel::download(new TipeAccExport, 'TipeAccesories.xlsx');
    }

    public function import(Request $request)
    {
        $file = $request->file('file');

        Excel::import(new TipeAscImport, $file);

        return redirect('/exim')->with('success', 'Data berhasil Di Upload.!');
    }
}

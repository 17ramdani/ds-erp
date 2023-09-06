<?php

namespace App\Http\Controllers\Purc;

// use DB;
use App\Models\kain\warna;
use Illuminate\Http\Request;
use App\Models\kain\tipe_kain;
use App\Models\kain\jenis_kain;
use App\Imports\TipeHargaImport;
use App\Exports\TipeHargaExport;
use App\Models\barang\TipePrice;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\customer\customer_category;

class TipePriceController extends Controller
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
        $jenis = jenis_kain::all();
        $warna = warna::all();
        $customer = customer_category::all();

        $jenisKainId = request('jenis_kain_id');
        $tipeKain = request('tipe_kain');
        $kategoriWarnaId = request('kategori_warna_id');
        $customerCategoryId = request('customer_category_id');
        $periode = request('periode');

        $query = TipePrice::query();

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

        if ($customerCategoryId) {
            $query->where('customer_category_id', $customerCategoryId);
        }

        if ($periode) {
            list($tahun, $bulan) = explode('-', $periode);
            $formattedDate = $tahun . '-' . $bulan;

            $query->whereYear('periode', $tahun)
                ->whereMonth('periode', $bulan);
        }

        $tipePrices = $query->latest('periode')->take(51)->get();

        return view('purc.tipe-price.index', compact('tipePrices', 'jenis', 'warna', 'customer'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_category_id.*' => 'required',
            'periode.*' => 'required',
            'harga_ecer.*' => 'required_if:tipe.*,harga_ecer|numeric',
            'harga_roll.*' => 'required_if:tipe.*,harga_roll|numeric',
            'metode_input' => 'nullable|string'
        ]);

        foreach ($request->customer_category_id as $key => $customer_category_id) {
            // Insert data untuk harga_ecer
            TipePrice::create([
                'tipe_kain_id' => $request->tipe_kain_id[$key],
                'customer_category_id' => $customer_category_id,
                'periode' => $request->periode[$key],
                'tipe' => 'ECER',
                'harga' => $request->harga_ecer[$key],
            ]);

            // Insert data untuk harga_roll
            TipePrice::create([
                'tipe_kain_id' => $request->tipe_kain_id[$key],
                'customer_category_id' => $customer_category_id,
                'periode' => $request->periode[$key],
                'tipe' => 'ROLL',
                'harga' => $request->harga_roll[$key],
            ]);
        }

        return redirect()->route('tipe-price.index')->with('success', 'Data berhasil disimpan.');
    }

    public function indexImport()
    {
        return view('purc.tipe-price.import');
    }

    public function export()
    {
        ob_end_clean();
        ob_start();
        return Excel::download(new TipeHargaExport, 'TipePrice.xlsx');
    }

    public function import(Request $request)
    {
        $file = $request->file('file');
        $periode = date('m-Y');

        Excel::import(new TipeHargaImport($periode),  $file);

        return redirect()->route('exim.index')->with('success', 'Data harga tipe kain berhasil diupload.');
    }
}

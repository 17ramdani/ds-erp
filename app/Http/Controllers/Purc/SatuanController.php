<?php

namespace App\Http\Controllers\purc;

use App\Http\Controllers\Controller;
use App\Models\Barang\BarangSatuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SatuanController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('satuan');
        $data = BarangSatuan::where('kode', 'LIKE', "%$query%")
            ->latest()
            ->get();

        return view('purc.satuan.index', compact('data', 'query'));
    }

    public function add()
    {
        return view('purc.satuan.add');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'keterangan' => 'required|string',
        ]);

        $data = new BarangSatuan();
        $data->kode = BarangSatuan::generateKode();
        $data->keterangan = $validate['keterangan'];
        $data->created_by = Auth::id();
        $data->save();

        return redirect()->route('satuan.index')
            ->with('success', 'Data kain berhasil disimpan.');
    }


    public function edit($id)
    {
        $data = BarangSatuan::findOrFail($id);

        return view('purc.satuan.detail', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'keterangan' => 'required|string',
        ]);

        $data = BarangSatuan::find($id);
        $data->keterangan = $request->keterangan;
        $data->updated_by = Auth::id();
        $data->save();

        return redirect()->route('satuan.index')->with('success', 'Data aksesoris berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $item = BarangSatuan::findOrFail($id);
        $item->delete();

        return redirect()->route('satuan.index')
            ->with('success', 'Data Aksesoris berhasil dihapus.');
    }
}

<?php

namespace App\Http\Controllers\Purc;

use App\Http\Controllers\Controller;
use App\Models\barang\BarangBagian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BarangBagianController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('bagian');
        $data = BarangBagian::where('kode', 'LIKE', "%$query%")
            ->latest()
            ->get();

        return view('purc.bagian.index', compact('data', 'query'));
    }

    public function add()
    {
        return view('purc.bagian.add');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required|string',
            'keterangan' => 'required|string',
        ]);

        $data = new BarangBagian();
        $data->kode = BarangBagian::generateKode();
        $data->nama = $validate['nama'];
        $data->keterangan = $validate['keterangan'];
        $data->created_by = Auth::id();
        $data->save();

        return redirect()->route('bagian.index')
            ->with('success', 'Data kain berhasil disimpan.');
    }


    public function edit($id)
    {
        $data = BarangBagian::findOrFail($id);

        return view('purc.bagian.detail', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string',
            'keterangan' => 'required|string',
        ]);

        $data = BarangBagian::find($id);
        $data->nama = $request->nama;
        $data->keterangan = $request->keterangan;
        $data->updated_by = Auth::id();
        $data->save();

        return redirect()->route('bagian.index')->with('success', 'Data aksesoris berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $item = BarangBagian::findOrFail($id);
        $item->delete();

        return redirect()->route('bagian.index')
            ->with('success', 'Data Aksesoris berhasil dihapus.');
    }
}

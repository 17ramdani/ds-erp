<?php

namespace App\Http\Controllers\Purc;

use App\Http\Controllers\Controller;
use App\Models\barang\BarangCorak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BarangCorakController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('corak');
        $data = BarangCorak::where('kode', 'LIKE', "%$query%")
            ->latest()
            ->get();

        return view('purc.corak.index', compact('data', 'query'));
    }

    public function add()
    {
        return view('purc.corak.add');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'keterangan' => 'required|string',
        ]);

        $data = new BarangCorak();
        $data->kode = BarangCorak::generateKode();
        $data->keterangan = $validate['keterangan'];
        $data->created_by = Auth::id();
        $data->save();

        return redirect()->route('corak.index')
            ->with('success', 'Data kain berhasil disimpan.');
    }


    public function edit($id)
    {
        $data = BarangCorak::findOrFail($id);

        return view('purc.corak.detail', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'keterangan' => 'required|string',
        ]);

        $data = BarangCorak::find($id);
        $data->keterangan = $request->keterangan;
        $data->updated_by = Auth::id();
        $data->save();

        return redirect()->route('corak.index')->with('success', 'Data aksesoris berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $item = BarangCorak::findOrFail($id);
        $item->delete();

        return redirect()->route('corak.index')
            ->with('success', 'Data Aksesoris berhasil dihapus.');
    }
}

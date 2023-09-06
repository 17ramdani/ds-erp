<?php

namespace App\Http\Controllers\purc;

use App\Http\Controllers\Controller;
use App\Models\Barang\BarangGramasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GramasiController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('gramasi');
        $data = BarangGramasi::where('kode', 'LIKE', "%$query%")
            ->latest()
            ->get();

        return view('purc.gramasi.index', compact('data', 'query'));
    }

    public function add()
    {
        return view('purc.gramasi.add');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required|string',
        ]);

        $data = new BarangGramasi();
        $data->kode = BarangGramasi::generateKode();
        $data->nama = $validate['nama'];
        $data->created_by = Auth::id();
        $data->save();

        return redirect()->route('gramasi.index')
            ->with('success', 'Data kain berhasil disimpan.');
    }


    public function edit($id)
    {
        $data = BarangGramasi::findOrFail($id);

        return view('purc.gramasi.detail', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string',
        ]);

        $data = BarangGramasi::find($id);
        $data->nama = $request->nama;
        $data->updated_by = Auth::id();
        $data->save();

        return redirect()->route('gramasi.index')->with('success', 'Data aksesoris berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $item = BarangGramasi::findOrFail($id);
        $item->delete();

        return redirect()->route('gramasi.index')
            ->with('success', 'Data Aksesoris berhasil dihapus.');
    }
}

<?php

namespace App\Http\Controllers\purc;

use App\Http\Controllers\Controller;
use App\Models\barang\BarangKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BarangKategoriController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('kategori');
        $data = BarangKategori::where('kode', 'LIKE', "%$query%")
            ->latest()
            ->get();

        return view('purc.kategori.index', compact('data', 'query'));
    }

    public function add()
    {
        return view('purc.kategori.add');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required|string',
        ]);

        $data = new BarangKategori();
        $data->kode = BarangKategori::generateKode();
        $data->nama = $validate['nama'];
        $data->created_by = Auth::id();
        $data->save();

        return redirect()->route('kategori.index')
            ->with('success', 'Data kain berhasil disimpan.');
    }


    public function edit($id)
    {
        $data = BarangKategori::findOrFail($id);

        return view('purc.kategori.detail', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string',
        ]);

        $data = BarangKategori::find($id);
        $data->nama = $request->nama;
        $data->updated_by = Auth::id();
        $data->save();

        return redirect()->route('kategori.index')->with('success', 'Data aksesoris berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $item = BarangKategori::findOrFail($id);
        $item->delete();

        return redirect()->route('kategori.index')
            ->with('success', 'Data Aksesoris berhasil dihapus.');
    }
}

<?php

namespace App\Http\Controllers\purc;

use App\Http\Controllers\Controller;
use App\Models\Barang\Warna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WarnaController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('warna');
        $data = Warna::where('created_at', 'LIKE', "%$query%")
            ->latest()
            ->get();

        return view('purc.warna.index', compact('data', 'query'));
    }

    public function add()
    {
        return view('purc.warna.add');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'parent_id' => 'required|numeric',
            'nama' => 'required|string',
            'keterangan' => 'required|string',
        ]);

        $data = new Warna();
        $data->kode = Warna::generateKode();
        $data->parent_id = $validate['parent_id'];
        $data->nama = $validate['nama'];
        $data->keterangan = $validate['keterangan'];
        $data->created_by = Auth::id();
        $data->save();

        return redirect()->route('warna.index')
            ->with('success', 'Data kain berhasil disimpan.');
    }


    public function edit($id)
    {
        $data = Warna::findOrFail($id);

        return view('purc.warna.detail', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'parent_id' => 'required|numeric',
            'nama' => 'required|string',
            'keterangan' => 'required|string',
        ]);

        $data = Warna::find($id);
        $data->parent_id = $request->parent_id;
        $data->nama = $request->nama;
        $data->keterangan = $request->keterangan;
        $data->updated_by = Auth::id();
        $data->save();

        return redirect()->route('warna.index')->with('success', 'Data aksesoris berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $item = Warna::findOrFail($id);
        $item->delete();

        return redirect()->route('warna.index')
            ->with('success', 'Data Aksesoris berhasil dihapus.');
    }
}

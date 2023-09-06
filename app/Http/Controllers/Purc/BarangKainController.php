<?php

namespace App\Http\Controllers\purc;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kain\jenis_kain;

class BarangKainController extends Controller
{

    public function index(Request $request)
    {
        $query = $request->input('kain');
        $data = Jenis_kain::where('nama', 'LIKE', "%$query%")
            ->orWhere('keterangan', 'LIKE', "%$query%")
            ->get();

        return view('purc.barang-kain-index', compact('data', 'query'));
    }

    public function add()
    {
        return view('purc.barang-kain-add');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required', 'string', 'max:255',
            'gambar' => 'nullable', 'string', 'max:255',
            'katalog' => 'nullable', 'string', 'max:255',
            'keterangan' => 'required', 'string', 'max:255',
        ]);

        $kain = new jenis_kain();
        $kain->kode = jenis_kain::generateKode();
        $kain->nama = $validatedData['nama'];
        $kain->gambar = $validatedData['gambar'];
        $kain->katalog = $validatedData['katalog'];
        $kain->keterangan = $validatedData['keterangan'];
        $kain->save();


        return redirect()->route('kain.index')
            ->with('success', 'Data kain berhasil disimpan.');
    }

    public function edit($id)
    {
        $kain = jenis_kain::findOrFail($id);
        return view('purc.barang-kain-update', compact('kain'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required', 'string', 'max:255',
            'gambar' => 'nullable', 'string', 'max:255',
            'katalog' => 'nullable', 'string', 'max:255',
            'keterangan' => 'required', 'string', 'max:255',
        ]);

        $kain = jenis_kain::findOrFail($id);
        $kain->nama = $request->nama;
        $kain->gambar = $request->gambar;
        $kain->katalog = $request->katalog;
        $kain->keterangan = $request->keterangan;
        $kain->save();

        return redirect()->route('kain.index')
            ->with('success', 'Data kain berhasil diupdate.');
    }

    public function destroy($id)
    {
        $kain = jenis_kain::findOrFail($id);
        $kain->delete();

        return redirect()->route('kain.index')
            ->with('success', 'Data kain berhasil dihapus.');
    }
}

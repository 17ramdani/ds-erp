<?php

namespace App\Http\Controllers\purc;

use App\Http\Controllers\Controller;
use App\Models\Barang\BarangLebar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LebarController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('lebar');
        $data = BarangLebar::where('kode', 'LIKE', "%$query%")
            ->latest()
            ->get();

        return view('purc.lebar.index', compact('data', 'query'));
    }

    public function add()
    {
        return view('purc.lebar.add');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'keterangan' => 'required|string',
        ]);

        $data = new BarangLebar();
        $data->kode = BarangLebar::generateKode();
        $data->keterangan = $validate['keterangan'];
        $data->created_by = Auth::id();
        $data->save();

        return redirect()->route('lebar.index')
            ->with('success', 'Data kain berhasil disimpan.');
    }


    public function edit($id)
    {
        $data = BarangLebar::findOrFail($id);

        return view('purc.lebar.detail', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'keterangan' => 'required|string',
        ]);

        $data = BarangLebar::find($id);
        $data->keterangan = $request->keterangan;
        $data->updated_by = Auth::id();
        $data->save();

        return redirect()->route('lebar.index')->with('success', 'Data aksesoris berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $item = BarangLebar::findOrFail($id);
        $item->delete();

        return redirect()->route('lebar.index')
            ->with('success', 'Data Aksesoris berhasil dihapus.');
    }
}

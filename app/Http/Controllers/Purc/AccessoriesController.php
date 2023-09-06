<?php

namespace App\Http\Controllers\Purc;


use App\Http\Controllers\Controller;
use App\Models\Barang\Accessories;
use Illuminate\Http\Request;

class AccessoriesController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('acs');
        $data = Accessories::where('name', 'LIKE', "%$query%")
            ->orWhere('type', 'LIKE', "%$query%")
            ->latest()
            ->get();


        return view('purc.acs.index', compact('data', 'query'));
    }

    public function add()
    {
        return view('purc.acs.add');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string',
            'type' => 'required|string',
            'harga_roll' => 'required|numeric',
            'harga_ecer' => 'required|numeric',
            'maks' => 'required|numeric',
        ]);

        $data = new Accessories();
        $data->kode = Accessories::generateKode();
        $data->name = $validate['name'];
        $data->type = $validate['type'];
        $data->harga_roll = $validate['harga_roll'];
        $data->harga_ecer = $validate['harga_ecer'];
        $data->maks = $validate['maks'];
        $data->save();

        return redirect()->route('acs.index')
            ->with('success', 'Data kain berhasil disimpan.');
    }


    public function edit($id)
    {
        $data = Accessories::findOrFail($id);

        return view('purc.acs.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'type' => 'required|string',
            'harga_roll' => 'required|numeric',
            'harga_ecer' => 'required|numeric',
            'maks' => 'required|numeric',
        ]);

        $data = Accessories::find($id);
        $data->name = $request->name;
        $data->type = $request->type;
        $data->harga_roll = $request->harga_roll;
        $data->harga_ecer = $request->harga_ecer;
        $data->maks = $request->maks;

        $data->save();

        return redirect()->route('acs.index')->with('success', 'Data aksesoris berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $item = Accessories::findOrFail($id);
        $item->delete();

        return redirect()->route('acs.index')
            ->with('success', 'Data Aksesoris berhasil dihapus.');
    }
}

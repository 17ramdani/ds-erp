<?php

namespace App\Http\Controllers\Exp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Exp\Delivery;
use App\Models\Pesanan\Pesanan;

class EkspedisiController extends Controller
{
    function index(Request $request)
    {
        $customer = $request->customer;
        $so = $request->so;
        if (isset($customer) or isset($so)) {
            $data['datas'] = Delivery::with([
                'pesanan' => function ($query) use ($so, $customer) {
                    $query->selectRaw('id,nomor,customer_id,tanggal_pesanan,no_invoice,alamat_kirim')
                        ->where('nomor', 'like', '%' . $so . '%')
                        ->with(['customer' => function ($query) use ($customer) {
                            $query->selectRaw('id,customer_category_id,nama')
                                ->where('nama', 'like', '%' . $customer . '%');
                        }]);
                }
            ])->selectRaw('id,no_sj,pesanan_id,jenis_faktur,status_sj,armada,no_resi,status')->latest()->get();
        } else {
            $data['datas'] = Delivery::with([
                'pesanan:id,nomor,customer_id,tanggal_pesanan,no_invoice,alamat_kirim' => [
                    'customer:id,customer_category_id,nama'
                ]
            ])->selectRaw('id,no_sj,pesanan_id,jenis_faktur,status_sj,armada,no_resi,status')->latest()->get();
        }
        $data['customer'] = $customer;
        $data['so'] = $so;
        // return response()->json($data, 200, [], JSON_PRETTY_PRINT);
        return view('exp.index', $data);
    }

    function edit($id)
    {
        $data['data'] = Delivery::with([
            'pesanan:id,nomor,customer_id,tanggal_pesanan,no_invoice,alamat_kirim' => [
                'customer:id,customer_category_id,nama'
            ]
        ])->selectRaw('id,no_sj,pesanan_id,jenis_faktur,status_sj,armada,no_resi,status,file_resi')
            ->where('id', $id)
            ->firstOrFail();
        return view('exp.ekspedisi-edit', $data);
    }
    function update(Request $request, $id)
    {
        $request->validate([
            'armada' => ['required', 'string', 'max:255'],
            'status' => ['required', 'string', 'max:255'],
            'no_resi' => ['required', 'string', 'max:255'],
            'file' => ['nullable', 'file', 'mimes:png,jpg,pdf', 'max:10240']
        ]);
        $data = Delivery::find($id);
        $data->armada = $request->armada;
        $data->status_sj = "Sudah Diproses";
        $data->status = $request->status;
        $data->no_resi = $request->no_resi;
        if ($request->hasFile('file')) {
            $file = $request->file('file');

            $name = str_replace('/', '-', $request->no_resi); // Generate a unique, random name...
            $extension = $file->extension(); // Determine the file's extension based on the file's MIME type...

            $path = $request->file('file')->storeAs('public/no-resi', $name . '.' . $extension);
            $data->file_resi = url('storage/no-resi') . '/' . $name . '.' . $extension;
        }
        $data->save();

        if ($request->status == "On Delivery") {
            Pesanan::where('id', $data->pesanan_id)->update([
                'status_pesanan_id' => 4,
                'status_kode' => 'Delivery'
            ]);
        }
        if ($request->status == "Delivered") {
            Pesanan::where('id', $data->pesanan_id)->update([
                'status_pesanan_id' => 5,
                'status_kode' => 'Done'
            ]);
        }

        return back()->with('success', 'Data berhasil disimpan.');
    }
}

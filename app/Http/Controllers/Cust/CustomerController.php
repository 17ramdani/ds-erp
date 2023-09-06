<?php

namespace App\Http\Controllers\Cust;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Customer\Customer;
use App\Models\Customer\customer_category;
use App\Models\District;
use App\Models\Provinces;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $data = Customer::with(['pesanan', 'category'])->latest()->get();
        $reguler = Customer::where('customer_category_id', '1')->count();
        $distributor = Customer::where('customer_category_id', '2')->count();
        $member = Customer::where('customer_category_id', '3')->count();

        $total =  $reguler + $member + $distributor;

        return view('cust.customer.index', compact('data', 'reguler', 'distributor', 'member', 'total'));
    }

    public function add()
    {
        $categori = customer_category::all();
        $provinces = Provinces::all();
        return view('cust.customer.add', compact('categori', 'provinces'));
    }

    public function getkabupaten(Request $request)
    {
        $id_provinsi = $request->id_provinsi;

        $kabupatens = City::where('province_id', $id_provinsi)->get();

        foreach ($kabupatens as $kabupaten) {
            echo "<option value='$kabupaten->id'>$kabupaten->name</option>";
        }
    }
    public function getkecamana(Request $request)
    {
        $id_kabupaten = $request->id_kabupaten;

        $kecamatans = District::where('city_id', $id_kabupaten)->get();

        foreach ($kecamatans as $kecamatan) {
            echo "<option value='$kecamatan->id'>$kecamatan->name</option>";
        }
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'customer_category_id' => 'required',
            'nama' => 'required',
            'pob' => 'required',
            'dob' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'no_ktp' => 'required',
            'nohp' => 'nullable',
            'omset' => 'nullable',
            'alamat' => 'nullable',
            'email' => 'required|email',
            'npwp' => 'nullable',
            'nama_perusahaan' => 'nullable',
            'alamat_perusahaan' => 'nullable',
            'tlp_perusahaan' => 'nullable',
            'email_perusahaan' => 'nullable|email',
            'jenis_usaha' => 'nullable',
            'omset_perusahaan' => 'nullable',
            'kebutuhan_nominal' => 'nullable',
            'referensi' => 'nullable',
        ]);

        $data = new Customer();
        $data->customer_category_id = $validatedData['customer_category_id'];
        $data->nama = $validatedData['nama'];
        $data->pob = $validatedData['pob'];
        $data->dob = $validatedData['dob'];
        $data->agama = $validatedData['agama'];
        $data->jenis_kelamin = $validatedData['jenis_kelamin'];
        $data->nohp = $validatedData['nohp'];
        $data->no_ktp = $validatedData['no_ktp'];
        $data->omset = $validatedData['omset'];
        $data->alamat = $validatedData['alamat'];
        $data->email = $validatedData['email'];
        $data->npwp = $validatedData['npwp'];
        $data->nama_perusahaan = $validatedData['nama_perusahaan'];
        $data->alamat_perusahaan = $validatedData['alamat_perusahaan'];
        $data->tlp_perusahaan = $validatedData['tlp_perusahaan'];
        $data->email_perusahaan = $validatedData['email_perusahaan'];
        $data->jenis_usaha = $validatedData['jenis_usaha'];
        $data->omset_perusahaan = $validatedData['omset_perusahaan'];
        $data->kebutuhan_nominal = $validatedData['kebutuhan_nominal'];
        $data->referensi = $validatedData['referensi'];

        $data->save();

        return redirect()->route('customer.index')->with('success', 'Data Customer berhasil disimpan.');
    }


    public function detail($id)
    {
        $customer = Customer::findOrFail($id);
        $categori = customer_category::all();

        return view('cust.customer.detail', compact('customer', 'categori'));
    }

    public function edit(Request $request, $id)
    {
        $validatedData = $request->validate([
            'customer_category_id' => 'required',
            'nama' => 'required',
            'pob' => 'required',
            'dob' => 'required',
            'no_ktp' => 'required',
            'pekerjaan' => 'nullable',
            'lama_berusaha' => 'nullable',
            'omset' => 'nullable',
            'nama_perusahaan' => 'nullable',
            'alamat_perusahaan' => 'nullable',
            'kota_perusahaan' => 'nullable',
            'tlp_perusahaan' => 'nullable',
            'email_perusahaan' => 'nullable|email',
            'lama_perusahaan' => 'nullable',
            'jenis_usaha' => 'nullable',
            'omset_perusahaan' => 'nullable',
            'kebutuhan_nominal' => 'nullable',
            'referensi' => 'nullable',
            'alamat' => 'nullable',
            'kota' => 'nullable',
            'notlp' => 'nullable',
            'nohp' => 'nullable',
            'email' => 'nullable|email',
            'npwp' => 'nullable',
        ]);
        $customer = Customer::findOrFail($id);
        $customer->update($validatedData);
        return redirect()->route('customer.index')->with('success', 'Data Customer berhasil diupdate.');
    }

    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();

        return redirect()->route('customer.index')
            ->with('success', 'Data Aksesoris berhasil dihapus.');
    }
}

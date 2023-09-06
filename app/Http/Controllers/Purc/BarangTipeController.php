<?php

namespace App\Http\Controllers\purc;

use App\Exports\TipeAllExport;
use App\Models\kain\warna;
use Illuminate\Http\Request;
use App\Models\kain\tipe_kain;
use App\Models\kain\jenis_kain;
use Illuminate\Support\Facades\DB;
use App\Models\barang\barang_lebar;
use App\Http\Controllers\Controller;
use App\Models\barang\barang_satuan;
use App\Models\barang\barang_gramasi;
use Illuminate\Support\Facades\Storage;
use App\Exports\TipeExport;
use App\Imports\TipeImport;
use Yajra\DataTables\Facades\DataTables;
use Maatwebsite\Excel\Facades\Excel;

class BarangTipeController extends Controller
{
    public function index(Request $request)
    {
        //data
        $data = tipe_kain::with('jenis', 'gramasi', 'lebar', 'warna', 'satuan')->latest();
        $jenis = jenis_kain::all();
        $tipe = tipe_kain::select('nama')->distinct()->get();
        $warna = warna::all();

        // Count data
        $cotton = tipe_kain::where('jenis_kain_id', '1')->count();
        $misty = tipe_kain::where('jenis_kain_id', '2')->count();
        $fleece = tipe_kain::where('jenis_kain_id', '3')->count();
        $lacoste = tipe_kain::where('jenis_kain_id', '4')->count();
        $babyterry = tipe_kain::where('jenis_kain_id', '5')->count();
        $dryfit = tipe_kain::where('jenis_kain_id', '6')->count();
        $polyster = tipe_kain::where('jenis_kain_id', '7')->count();
        $merino = tipe_kain::where('jenis_kain_id', '8')->count();
        $woven = tipe_kain::where('jenis_kain_id', '9')->count();

        if ($request->filled('jenis_kain_id')) {
            $data->where('jenis_kain_id', $request->jenis_kain_id);
        }
        if ($request->filled('tipe_kain')) {
            $data->where('nama', $request->tipe_kain);
        }
        if ($request->filled('kategori_warna_id')) {
            $data->where('kategori_warna_id', $request->kategori_warna_id);
        }
        if ($request->filled('warna_id')) {
            $data->where('warna_id', $request->warna_id);
        }
        if ($request->filled('query')) {
            $data->where(function ($query) use ($request) {
                $query->where('jenis_kain_id', 'LIKE', '%' . $request->query('query') . '%')
                    ->orWhere('nama', 'LIKE', '%' . $request->query('query') . '%')
                    ->orWhere('kategori_warna_id', 'LIKE', '%' . $request->query('query') . '%')
                    ->orWhere('warna_id', 'LIKE', '%' . $request->query('query') . '%');
            });
        }

        $datatable = DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('jenis_kain', function ($row) {
                return $row->jenis->nama;
            })
            ->addColumn('kategori_warna', function ($row) {
                return $row->kategori_warna_id ? $row->kategori_warna->nama : '';
            })
            ->addColumn('warna', function ($row) {
                return $row->warna->nama;
            })
            ->addColumn('gramasi', function ($row) {
                return $row->gramasi->nama;
            })
            ->addColumn('lebar', function ($row) {
                return $row->lebar->keterangan;
            })
            ->addColumn('gambar', function ($row) {
                return '<a href="#gambarKain" class="btn-modal" data-target="#gambarKain' . $row->id . '" data-image="' . $row->gambar . '">View</a>';
            })
            ->addColumn('action', function ($row) {
                $action = '<ul class="uk-iconnav">';
                $action .= '<li><a href="' . route('tipe.detail', ['id' => $row->id]) . '" title="View" class="btn-detail" uk-icon="icon: info"></a></li>';
                $action .= '<li><a href="' . route('tipe.edit', ['id' => $row->id]) . '" title="Edit" class="btn-edit" uk-icon="icon: file-edit"></a></li>';
                $action .= '<li>';
                $action .= '<form action="' . route('tipe.destroy', $row->id) . '" method="POST">';
                $action .= '<input type="hidden" name="_method" value="DELETE">';
                $action .= csrf_field();
                $action .= '<button type="submit" uk-icon="icon: trash" title="Delete" onclick="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\')"></button>';
                $action .= '</form>';
                $action .= '</li>';
                $action .= '</ul>';
                return $action;
            })
            ->rawColumns(['gambar', 'action']);

        if ($request->ajax()) {
            return $datatable->toJson();
        }

        return view('purc.barang-tipe-index', compact('datatable', 'jenis', 'tipe', 'warna', 'cotton', 'misty', 'fleece', 'lacoste', 'babyterry', 'dryfit', 'polyster', 'merino', 'woven'));
    }

    public function getWarna(Request $request)
    {
        $q = $request->input('q');
        $data = Warna::where('nama', 'like', '%' . $q . '%')->get();

        return response()->json($data);
    }
    // public function getTipeKainByJenis(Request $request)
    // {
    //     $jenis_kain_id = $request->jenis_kain_id;
    //     $tipe_kain = tipe_kain::where('jenis_kain_id', $jenis_kain_id)->get();
    //     return response()->json($tipe_kain);
    // }

    // public function getKategoriWarnaByTipeKain(Request $request)
    // {
    //     $tipe_kain_id = $request->tipe_kain_id;
    //     $kategori_warna = Warna::where('tipe_kain_id', $tipe_kain_id)->get();
    //     return response()->json($kategori_warna);
    // }

    // public function getWarnaByKategoriWarna(Request $request)
    // {
    //     $kategori_warna_id = $request->kategori_warna_id;
    //     $warna = Warna::where('kategori_warna_id', $kategori_warna_id)->get();
    //     return response()->json($warna);
    // }

    public function add()
    {
        $jenis = jenis_kain::all();
        $warna = warna::all();
        $satuan = barang_satuan::all();
        $gramasi = barang_gramasi::all();
        $lebar = barang_lebar::all();
        $basic = tipe_kain::all();
        $spandex = tipe_kain::all();

        return view('purc.barang-tipe-add', compact('jenis', 'warna', 'satuan', 'gramasi', 'lebar', 'basic', 'spandex'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_kain_id' => 'required',
            'nama' => 'required',
            'barang_gramasi_id' => 'required',
            'barang_lebar_id' => 'required',
            'bagian' => 'required',
            'kategori_warna_id' => 'required',
            'warna_id' => 'required',
            'barang_satuan_id' => 'required',
            'basic_id' => 'nullable',
            'spandex_id' => 'nullable',
            // 'harga_default' => 'nullable|numeric',
            // 'harga_final' => 'nullable|numeric',
            'harga_roll' => 'required|numeric',
            'harga_ecer' => 'required|numeric',
            'gambar' => 'nullable|image|max:2048',
            'gambar2' => 'nullable|image|max:2048',
            'gambar3' => 'nullable|image|max:2048',
            'qty_roll' => 'required',
            'deskripsi' => 'nullable',
            'karakteristik' => 'nullable',
            'panjang' => 'nullable',
        ]);

        $tipe_kain = new tipe_kain([
            'kode' => tipe_kain::generateKode(),
            'jenis_kain_id' => $request->get('jenis_kain_id'),
            'nama' => $request->get('nama'),
            'barang_gramasi_id' => $request->get('barang_gramasi_id'),
            'barang_lebar_id' => $request->get('barang_lebar_id'),
            'bagian' => $request->get('bagian'),
            'kategori_warna_id' => $request->get('kategori_warna_id'),
            'warna_id' => $request->get('warna_id'),
            'set' => 0,
            'basic_id' => $request->get('basic_id'),
            'spandex_id' => $request->get('spandex_id'),
            'status' => 'A',
            'barang_satuan_id' => $request->get('barang_satuan_id'),
            'harga_default' => 0,
            'harga_final' => 0,
            'harga_roll' => $request->get('harga_roll'),
            'harga_ecer' => $request->get('harga_ecer'),
            'qty_roll' => $request->get('qty_roll'),
            'deskripsi' => $request->get('deskripsi'),
            'karakteristik' => $request->get('karakteristik'),
            'panjang' => $request->get('panjang'),
        ]);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $namaGambar = $gambar->getClientOriginalName();
            $namaGambar = str_replace(' ', '_', $namaGambar);
            $gambar->storeAs('tipe-kain', $namaGambar, 'public');
            $gambarPath = 'https://duniasandang.coba.dev/dspanel/storage/tipe-kain/' . $namaGambar;
            $tipe_kain->gambar = $gambarPath;
        }

        if ($request->hasFile('gambar_2')) {
            $gambar2 = $request->file('gambar_2');
            $namaGambar2 = $gambar2->getClientOriginalName();
            $namaGambar2 = str_replace(' ', '_', $namaGambar2);
            $gambar2->storeAs('tipe-kain', $namaGambar2, 'public');
            $gambarPath2 = 'https://duniasandang.coba.dev/dspanel/storage/tipe-kain/' . $namaGambar2;
            $tipe_kain->gambar_2 = $gambarPath2;
        }

        if ($request->hasFile('gambar_3')) {
            $gambar3 = $request->file('gambar_3');
            $namaGambar3 = $gambar3->getClientOriginalName();
            $namaGambar3 = str_replace(' ', '_', $namaGambar3);
            $gambar3->storeAs('tipe-kain', $namaGambar3, 'public');
            $gambarPath3 = 'https://duniasandang.coba.dev/dspanel/storage/tipe-kain/' . $namaGambar3;
            $tipe_kain->gambar_3 = $gambarPath3;
        }
        $tipe_kain->save();
        return redirect('/tipe')->with('success', 'Data berhasil ditambahkan!');
    }

    public function detail(Request $request, $id)
    {
        $tipe = tipe_kain::findOrFail($id);
        $jenis = jenis_kain::all();
        $warna = warna::all();
        $kategori_warna = warna::all();
        $satuan = barang_satuan::all();
        $gramasi = barang_gramasi::all();
        $lebar = barang_lebar::all();
        $gambar = 'tipe-kain/' . $tipe->gambar;

        return view('purc.barang-tipe-detail', compact('jenis', 'kategori_warna', 'warna', 'satuan', 'gramasi', 'lebar', 'tipe', 'gambar'));
    }

    public function edit($id)
    {
        $tipe = tipe_kain::findOrFail($id);
        $jenis = jenis_kain::all();
        $warna = warna::all();
        $kategori_warna = warna::all();
        $satuan = barang_satuan::all();
        $gramasi = barang_gramasi::all();
        $lebar = barang_lebar::all();
        $basic = tipe_kain::where('bagian', 'accessories')->get();
        $spandex = tipe_kain::where('bagian', 'accessories')->get();

        return view('purc.barang-tipe-update', compact('jenis', 'kategori_warna', 'warna', 'satuan', 'gramasi', 'lebar', 'tipe', 'basic', 'spandex'));
    }

    public function update(Request $request, $id)
    {
        $tipe_kain = tipe_kain::find($id);
        $tipe_kain->jenis_kain_id = $request->input('jenis_kain_id');
        $tipe_kain->nama = $request->input('nama');
        $tipe_kain->barang_gramasi_id = $request->input('barang_gramasi_id');
        $tipe_kain->barang_lebar_id = $request->input('barang_lebar_id');
        $tipe_kain->bagian = $request->input('bagian');
        $tipe_kain->kategori_warna_id = $request->input('kategori_warna_id');
        $tipe_kain->warna_id = $request->input('warna_id');
        $tipe_kain->barang_satuan_id = $request->input('barang_satuan_id');
        $tipe_kain->harga_roll = $request->input('harga_roll');
        $tipe_kain->harga_ecer = $request->input('harga_ecer');
        $tipe_kain->qty_roll = $request->input('qty_roll');
        $tipe_kain->deskripsi = $request->input('deskripsi');
        $tipe_kain->karakteristik = $request->input('karakteristik');
        $tipe_kain->panjang = $request->input('panjang');

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $namaGambar = $gambar->getClientOriginalName();
            $namaGambar = str_replace(' ', '_', $namaGambar);
            $gambar->storeAs('tipe-kain', $namaGambar, 'public');
            $gambarPath = 'https://duniasandang.coba.dev/dspanel/storage/tipe-kain/' . $namaGambar;
            $tipe_kain->gambar = $gambarPath;
        }

        if ($request->hasFile('gambar_2')) {
            $gambar2 = $request->file('gambar_2');
            $namaGambar2 = $gambar2->getClientOriginalName();
            $namaGambar2 = str_replace(' ', '_', $namaGambar2);
            $gambar2->storeAs('tipe-kain', $namaGambar2, 'public');
            $gambarPath2 = 'https://duniasandang.coba.dev/dspanel/storage/tipe-kain/' . $namaGambar2;
            $tipe_kain->gambar_2 = $gambarPath2;
        }

        if ($request->hasFile('gambar_3')) {
            $gambar3 = $request->file('gambar_3');
            $namaGambar3 = $gambar3->getClientOriginalName();
            $namaGambar3 = str_replace(' ', '_', $namaGambar3);
            $gambar3->storeAs('tipe-kain', $namaGambar3, 'public');
            $gambarPath3 = 'https://duniasandang.coba.dev/dspanel/storage/tipe-kain/' . $namaGambar3;
            $tipe_kain->gambar_3 = $gambarPath3;
        }

        $tipe_kain->save();

        return redirect()->route('tipe.index')
            ->with('success', 'Tipe Kain berhasil diupdate.');
    }

    public function destroy($id)
    {
        $tipe_kain = tipe_kain::find($id);

        if (!$tipe_kain) {
            return redirect()->back()->with('error', 'Tipe kain tidak ditemukan.');
        }

        if ($tipe_kain->gambar && Storage::exists($tipe_kain->gambar)) {
            Storage::delete($tipe_kain->gambar);
        }

        $tipe_kain->delete();

        return redirect()->back()->with('success', 'Tipe kain berhasil dihapus.');
    }

    public function export_index()
    {
        return view('purc.barang-tipe-export');
    }

    public function export()
    {
        ob_end_clean();
        ob_start();
        return Excel::download(new TipeExport, 'TipeKain.xlsx');
    }

    public function export_all()
    {
        ob_end_clean();
        ob_start();
        return Excel::download(new TipeAllExport, 'TipeKainAll.xlsx');
    }

    public function import_index()
    {
        return view('purc.barang-tipe-import');
    }

    public function import(Request $request)
    {
        $file = $request->file('file');

        Excel::import(new TipeImport, $file);

        return redirect('/tipe')->with('success', 'Data berhasil Di Upload.!');
    }
}

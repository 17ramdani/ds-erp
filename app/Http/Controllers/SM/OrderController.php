<?php

namespace App\Http\Controllers\SM;

use App\Http\Controllers\Controller;
use App\Models\barang\barang_satuan;
use App\Models\barang\TipeKain;
use App\Models\Exp\Delivery;
use App\Models\Kain\tipe_kain;
use App\Models\Kain\TipeKainPrice;
use App\Models\Penjualan\Salesman;
use App\Models\Pesanan\DetailPesanan;
use App\Models\Pesanan\Pesanan;
use App\Models\Pesanan\status_pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Browser;
use PDF;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{

    public function draft_cetak($pesanan_id)
    {
        // $data['pesanan'] = Pesanan::with([
        //     "customer",
        //     "details" => [
        //         "tipe_kain" => [
        //             "lebar",
        //             "gramasi",
        //             "warna"
        //         ],
        //         "warna_pesanan"
        //     ],
        //     "salesna"
        // ])
        //     ->where("id", $pesanan_id)->firstOrFail();
        $data['pesanan'] = Pesanan::with([
            "customer",
            "details" => function ($query) {
                $query->orderByRaw("id")->with([
                    "tipe_kain" => function ($query) {
                        $query->orderBy('id', 'asc')->with([
                            "lebar",
                            "gramasi",
                            "warna",
                            "kategori_warna"
                        ]);
                    },
                    'warna_pesanan',
                    'tipe_kain_accessories' => [
                        'accessories'
                    ]
                ]);
            }
        ])->where("id", $pesanan_id)->firstOrFail();

        // return response()->json($data['pesanan'], 200, [], JSON_PRETTY_PRINT);
        $data['tanggalnow'] = Carbon::now();
        $data['salesmans'] = Salesman::all();
        $data['satuans'] = barang_satuan::all();

        // $data['jum_qty'] = DetailPesanan::with(["details"])->where([
        //     ["pesanan_id", $pesanan_id],
        //     ["bagian","body"]
        //     ])->groupBy('tipe_kain_id')->sum('qty');

        $data['jum_qty'] = DetailPesanan::with(["details"])
            ->where([
                ["pesanan_id", $pesanan_id],
                ["bagian", "body"]
            ])
            ->groupBy('tipe_kain_id')
            ->selectRaw('sum(qty) as total_qty, tipe_kain_id')
            ->pluck('total_qty', 'tipe_kain_id')
            ->toArray();

        $path = base_path('storage/logo_print.png');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $datax = file_get_contents($path);
        $data['logo'] = 'data:image/' . $type . ';base64,' . base64_encode($datax);
        // return view('sm.cetak-order', $data);
        $pdf = PDF::loadview('sm.cetak-order', $data);

        $pdf->setPaper('a4', 'portrait', '5mm');
        $pdf->setOptions([
            'isPhpEnabled' => true,
            'isRemoteEnabled' => true,
            'isHtml5ParserEnabled' => true
        ]);
        // $pdf->render();
        // return $pdf->download('order-pesanan-pdf');
        return $pdf->stream();
        // return response()->json($data['pesanan'], 200, [], JSON_PRETTY_PRINT);
    }

    public function index(Request $request)
    {

        $request->validate([
            'tanggal_mulai' => ['nullable', 'date'],
            'tanggal_akhir' => ['nullable', 'date'],
        ]);
        $tglm = $request->tanggal_mulai ?? "2000-01-01";
        $tgla = $request->tanggal_akhir ?? date("Y-m-d");
        // $data['pesanans'] = Pesanan::with([
        //     "customer" => [
        //         "category"
        //     ],
        //     "details"
        // ])->whereBetween('tanggal_pesanan', [$tglm, $tgla])->latest()->get();

        $data['pesanans'] = Pesanan::with([
            "customer:id,nama,customer_category_id" => [
                "category:id,nama"
            ],
            'details:id,pesanan_id,tipe_kain_id,qty,qty_act,harga,satuan,bagian'
        ])
            ->select('id', 'nomor', 'customer_id', 'tanggal_pesanan', 'tipe_pesanan', 'target_pesanan', 'status_kode', 'ongkir', 'total')
            ->whereBetween('tanggal_pesanan', [$tglm, $tgla])
            ->latest()->get();

        $data['pesanan_count'] = DB::select('SELECT
            COUNT(*) AS total_so,
            COUNT(case when pesanan.status_kode="Draft" then 1 end ) AS draft,
            COUNT(case when pesanan.status_kode="Approved" then 1 end ) AS approve,
            COUNT(case when pesanan.status_kode="WIP" then 1 end ) AS wip,
            COUNT(case when pesanan.status_kode="Invoicing" then 1 end ) AS invoicing,
            COUNT(case when pesanan.status_kode="Delivery" then 1 end ) AS dilevery,
            COUNT(case when pesanan.status_kode="Done" then 1 end ) AS done
            FROM pesanan
            WHERE deleted_at IS NULL')[0];
        $data['custcat_count'] = DB::select('SELECT
                    COUNT(case when customer_category.nama="Reguler" then 1 end ) AS reg,
                    COUNT(case when customer_category.nama !="Reguler" then 1 end ) AS hp
                    FROM pesanan
                    JOIN customer ON pesanan.customer_id=customer.id
        JOIN customer_category ON customer.customer_category_id=customer_category.id
                    WHERE pesanan.deleted_at IS NULL AND pesanan.tanggal_pesanan BETWEEN "' . $tglm . '" AND "' . $tgla . '"')[0];
        // $data['tipes_count'] = DB::select('SELECT
        //     COUNT(case when pesanan.tipe_pesanan="Retail" then 1 end ) AS retail,
        //     COUNT(case when pesanan.tipe_pesanan="Fresh Order" then 1 end ) AS fo,
        //     COUNT(case when pesanan.tipe_pesanan="Development" then 1 end ) AS dev
        //     FROM pesanan
        //     WHERE deleted_at IS NULL AND pesanan.tanggal_pesanan BETWEEN "' . $tglm . '" AND "' . $tgla . '"')[0];
        $data['tglm'] = $tglm;
        $data['tgla'] = $tgla;
        return view('sm.order-index', $data);
        // return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }

    public function add()
    {
        return view('sm.order-add');
    }

    public function detail($id)
    {
        $pcus = Pesanan::with('customer:id,customer_category_id,nama')->select('id', 'customer_id')->find($id);
        $customer_category_id = $pcus['customer']['customer_category_id'];

        // dd($customer_category_id);

        $data['pesanan'] = Pesanan::with([
            "customer:id,customer_category_id,nama" => [
                "category:id,nama"
            ],
            "details" => function ($query) use ($customer_category_id) {
                $query->orderByRaw("id")->with([
                    "tipe_kain" => function ($query) {
                        $query
                            ->selectRaw('id,kode,jenis_kain_id,kategori_warna_id,warna_id,barang_lebar_id,barang_gramasi_id,barang_satuan_id,
                            nama')
                            ->orderBy('id', 'asc')->with([
                                "lebar",
                                "gramasi",
                                "warna",
                                "kategori_warna",
                                'satuan:id,keterangan'
                            ]);
                    },
                    'warna_pesanan',
                    'tipe_kain_price_ecer' => function ($query) use ($customer_category_id) {
                        $query->where([['customer_category_id', $customer_category_id], ['tipe', 'ECER']])->max('periode');
                    },
                    'tipe_kain_price_roll' => function ($query) use ($customer_category_id) {
                        $query->where([['customer_category_id', $customer_category_id], ['tipe', 'ROLL']])->max('periode');
                    },
                    'tipe_kain_accessories' => [
                        'accessories',
                        'tipe_kain_price_ecer' => function ($query) use ($customer_category_id) {
                            $query->where([['customer_category_id', $customer_category_id], ['tipe', 'ECER']])->max('periode');
                        },
                        'tipe_kain_price_roll' => function ($query) use ($customer_category_id) {
                            $query->where([['customer_category_id', $customer_category_id], ['tipe', 'ROLL']])->max('periode');
                        }
                    ]
                ]);
            }
        ])->where("id", $id)
            ->selectRaw('id,nomor,customer_id,sales_man_id,customer_service_id,tanggal_pesanan,tipe_pesanan
            ,kategori_pesanan,jenis_pesanan,target_pesanan,status_pesanan_id,status_kode,dp,ongkir,total,no_invoice,pelunasan,sisa_bayar,
            alamat_kirim,catatan,catatan_cs,bukti_transfer,bukti_pelunasan,jatuh_tempo')
            ->firstOrFail();
        $data['salesmans'] = Salesman::all();
        $data['satuans'] = barang_satuan::all();
        // return response()->json($data['pesanan'], 200, [], JSON_PRETTY_PRINT);
        return view('sm.order-detail', $data);
    }

    public function draft_detail($pesanan_id)
    {
        $data['pesanan'] = Pesanan::with([
            "customer",
            "details" => [
                "tipe_kain" => [
                    "lebar",
                    "gramasi",
                    "warna",
                    "kategori_warna"
                ]
            ]
        ])->where("id", $pesanan_id)->firstOrFail();
        $data['salesmans'] = Salesman::all();
        $data['satuans'] = barang_satuan::all();

        return view('sm.order-draft-detail', $data);
        // return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }

    public function draft_index()
    {
        return view('sm.order-draft-index');
    }
    public function order_tipe_index($tipe)
    {
        $tipes = array("Draft", "Approved", "WIP", "Invoicing", "Delivary", "Done");

        $data['pesanans'] = Pesanan::with([
            "customer:id,customer_category_id,nama" => [
                "category:id,nama"
            ],
            "details:id"
        ])
            ->selectRaw('id,nomor,customer_id,tanggal_pesanan')
            ->latest()->get();
        $data['tipe'] = "All";
        if (in_array($tipe, $tipes)) {
            $data['pesanans'] = Pesanan::with([
                "customer:id,customer_category_id,nama" => [
                    "category:id,nama"
                ],
                "details:id,pesanan_id"
            ])
                ->selectRaw('id,nomor,customer_id,tanggal_pesanan')
                ->where('status_kode', $tipe)->latest()->get();
            $data['tipe'] = $tipe;
        }
        // return response()->json($data, 200, [], JSON_PRETTY_PRINT);
        return view('sm.order-draft-index', $data);
    }

    public function retail_index(Request $request, $tipe)
    {
        $request->validate([
            'tanggal_mulai' => ['nullable', 'date'],
            'tanggal_akhir' => ['nullable', 'date'],
        ]);
        $tglm = $request->tanggal_mulai ?? "2000-01-01";
        $tgla = $request->tanggal_akhir ?? date("Y-m-d");

        $data['pesanans'] = Pesanan::with([
            "customer" => [
                "category"
            ],
            "details"
        ])->where('tipe_pesanan', $tipe)->whereBetween('tanggal_pesanan', [$tglm, $tgla])->latest()->get();
        $data['pesanan_count'] = DB::select('SELECT
            COUNT(*) AS total_so,
            COUNT(case when pesanan.status_kode="Draft" then 1 end ) AS draft,
            COUNT(case when pesanan.status_kode="Approved" then 1 end ) AS approve,
            COUNT(case when pesanan.status_kode="WIP" then 1 end ) AS wip,
            COUNT(case when pesanan.status_kode="Invoicing" then 1 end ) AS invoicing,
            COUNT(case when pesanan.status_kode="Dilevery" then 1 end ) AS dilevery,
            COUNT(case when pesanan.status_kode="Done" then 1 end ) AS done
            FROM pesanan
            WHERE deleted_at IS NULL AND tipe_pesanan="' . $tipe . '" AND pesanan.tanggal_pesanan BETWEEN "' . $tglm . '" AND "' . $tgla . '"')[0];
        $data['tipe_count'] = Pesanan::where('tipe_pesanan', $tipe)->count();
        $data['tglm'] = $tglm;
        $data['tgla'] = $tgla;
        $data['tipe'] = $tipe;
        return view('sm.order-01-retail-index', $data);
    }

    public function fresh_index()
    {
        return view('sm.order-02-fresh-index');
    }

    public function dev_index()
    {
        return view('sm.order-03-dev-index');
    }


    public function khusus_index()
    {
        return view('sm.order-khusus-index');
    }
    public function khusus_detail()
    {
        return view('sm.order-khusus-detail');
    }


    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function draft_update(Request $request, $id)
    {

        $status_pesanan = 1;
        if ($request->status == "Draft") {
            $status_pesanan = 1;
        } else if ($request->status == "Approved") {
            $status_pesanan = 2;
        } else if ($request->status == "Invoicing") {
            $status_pesanan = 3;
        } else if ($request->status == "Delivery") {
            $status_pesanan = 4;
        } else if ($request->status == "LO") {
            $status_pesanan = 6;
        } else if ($request->status == "Done") {
            $status_pesanan = 5;
        }

        $dp = CurrencyToInteger($request->dp_stok);
        $pelunasan = CurrencyToInteger($request->pelunasan_stok);
        $ongkir = CurrencyToInteger($request->ongkir_stok);
        $total  = CurrencyToInteger($request->grandtotalstok);
        $sisa_byr = CurrencyToInteger($request->sisa_bayar_stok);


        //update pesanan
        Pesanan::where('id', $id)->update([
            'sales_man_id' => $request->sales,
            'jenis_pesanan' => $request->jenis_pesanan,
            'tipe_pesanan' => $request->tipe_pesanan,
            'kategori_pesanan' => $request->kategori_pesanan,
            // 'target_pesanan' => $request->target_kirim,
            'jatuh_tempo' => $request->target_kirim,
            'status_pesanan_id' => $status_pesanan,
            'status_kode' => $request->status,
            'ongkir' => $ongkir,
            'dp' => $dp,
            'pelunasan' => $pelunasan,
            'total' => $total,
            'sisa_bayar' => $sisa_byr,
            'catatan_cs'  => $request->catatan_admin,
            'updated_by' => auth()->user()->id,
            'updated_by_host' =>  $request->ip(),
            'updated_by_device' => Browser::browserName(),
        ]);

        for ($x = 0; $x < count($request->retail_detail_id); $x++) {
            DetailPesanan::where('id', $request->retail_detail_id[$x])->update([
                // 'warna_id'  => $request->retail_warna[$x],
                'qty_act' => $request->retail_qty2[$x],
                // 'satuan' => $request->retail_satuan[$x] ?? 'KG',
                'satuan' => ($request->retail_satuan[$x] == "ROLL") ? "ROLL" : "ECER",
                'harga' => CurrencyToInteger($request->retail_harga[$x]),
                'jenis_disc' => $request->retail_jenis_disc[$x],
                'total_disc' => $request->retail_tot_disc[$x],
                'barang_lot_id' => $request->retail_lot[$x]
            ]);
        }
        if ($request->status == "Invoicing") {
            $this->invoicing($id);
        }
        if ($request->status == "Delivery") {
            $this->delivering($id);
        }
        if (isset($request->button_submit)) {
            return redirect()->route('order.index')->with('success', 'Pesanan berhasil di ' . $request->status);
        }
        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }

    public function destroy($id)
    {
        //
    }

    public function harga_satuan(Request $request, $kodebrg)
    {
        $hargaRoll = 0;
        $hargaEcer = 0;
        $qtyRoll   = 0;
        $cc_id = $request->customer_category_id;
        $bagian = $request->bagian;
        $satuan_brg = $request->satuan_brg;
        if ($satuan_brg != "ROLL") {
            $satuan_brg = "ECER";
        }
        if ($bagian == "body") {
            $tipekain = TipeKain::where('kode', $kodebrg)->latest()->first();
            if (isset($tipekain)) {
                $tipe_kain_id = $tipekain->id;
                $bagian = $tipekain->bagian;
                $harga_roll = $this->tipeKainHarga($tipe_kain_id, 'ROLL', $cc_id);
                $harga_ecer = $this->tipeKainHarga($tipe_kain_id, 'ECER', $cc_id);
                $qtyRoll    = $tipekain->qty_roll;

                $hargaRoll = $harga_roll;
                $hargaEcer = $harga_ecer;
            }
        }
        if ($bagian == "accessories") {
            $tipe_kain_acc_id = $request->kode_barang;
            $price = DB::table('tipe_kain_accessories as tka')
                ->join('accessories as a', 'a.id', '=', 'tka.accessories_id')
                ->join('tipe_kain_prices AS tkp', 'tkp.tipe_kain_id', '=', 'tka.tipe_kain_id')
                ->selectRaw('tka.id,tka.tipe_kain_id,a.name,a.harga_roll,a.harga_ecer,tkp.harga,tkp.periode')
                ->where([['tka.id', $tipe_kain_acc_id], ['tkp.customer_category_id', $cc_id], ['tipe', $satuan_brg]])
                ->orderBy('tkp.periode', 'DESC')
                ->first();
            if (isset($price)) {
                $hargaEcer = $price->harga_ecer + $price->harga;
                $hargaRoll = $price->harga_roll + $price->harga;
            }
        }

        return response()->json([
            'qty_roll'   => $qtyRoll,
            'harga_roll' => $hargaRoll,
            'harga_ecer' => $hargaEcer
        ], 200, [], JSON_PRETTY_PRINT);
    }

    function invoicing($pesanan_id)
    {
        $pesanan = Pesanan::find($pesanan_id);
        if (!isset($pesanan->no_invoice)) {
            $pesanan->no_invoice = "INV/" . date('Y/m/d') . '/' . date('His');
            $pesanan->save();
        }
    }
    function delivering($pesanan_id)
    {
        $sj = Delivery::where('pesanan_id', $pesanan_id)->first();
        $no_sj = "SJ/" . date('Y/m/d') . '/' . date('His');
        if (!isset($sj)) {
            Delivery::create([
                'pesanan_id' => $pesanan_id,
                'no_sj' => $no_sj,
                'armada' => '-',
                'status_sj' => 'Belum Diproses',
                'status' => 'Belum Diproses'
            ]);
        }
    }
    function tipeKainHarga($tipe_kain_id, $satuan, $cc_id)
    {
        $hargaTipe = TipeKainPrice::where([
            ['tipe_kain_id', $tipe_kain_id], ['tipe', $satuan], ['customer_category_id', $cc_id]
        ])->orderByDesc('periode')->first();
        $harga = $hargaTipe->harga ?? 0;
        return $harga;
    }

    public function notif()
    {
    $pesanan = Pesanan::where('notif', 1)
                     ->get();

    return view('pesanan.notif', compact('pesanan'));
    }

    public function updateNotif($id)
    {
        $notif = Pesanan::find($id);

        if ($notif) {
            $notif->update(['notif' => 2]);

            return redirect()->route('draft.detail', $notif->id)->with('success', 'Notifikasi telah diperbarui.');
        }
        return redirect()->back()->with('error', 'Notifikasi tidak ditemukan.');
    }

    public function get_notif(Request $request)
{
    $notif = $request->input('notif', 1);

    // Menggunakan fungsi count() untuk menghitung jumlah notifikasi
    $countNotif = Pesanan::where('notif', $notif)->count();

    // Log data sebelum dikirim sebagai respons
    Log::info('Jumlah notifikasi: ' . $countNotif);

    // Mengembalikan hasil dalam format JSON dengan variabel 'countNotif'
    return response()->json(['countNotif' => $countNotif]);
}



}

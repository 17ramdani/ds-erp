<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Barang\JenisKain;
use App\Models\Barang\TipeKain;
use App\Models\Barang\WarnaKain;
use App\Models\Customer\CustomerService;
use App\Models\Keranjang;
use App\Models\Pesanan\CustomerExperience;
use App\Models\Pesanan\CustomerPoint;
use Illuminate\Http\Request;
use App\Models\Pesanan\DetailPesanan;
use App\Models\Pesanan\Pesanan;
use Browser;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class PesananController extends Controller
{
    public function index()
    {
        $customer_id = auth()->user()->customer_id;
        $data['count'] = DB::select('SELECT
            COUNT(*) AS sts_0,
            COUNT(case when status_pesanan.keterangan="Tunggu Konfirmasi" then 1 end ) AS sts_1,
            COUNT(case when status_pesanan.keterangan="Tunggu Pembayaran" then 1 end ) AS sts_2,
            COUNT(case when status_pesanan.keterangan="Pesanan Diproses" then 1 end ) AS sts_3,
            COUNT(case when status_pesanan.keterangan="Pesanan Diantar" then 1 end ) AS sts_4,
            COUNT(case when status_pesanan.keterangan="Pesanan Selesai" then 1 end ) AS sts_5
            FROM pesanan
            JOIN status_pesanan ON pesanan.status_pesanan_id=status_pesanan.id
            WHERE pesanan.customer_id=' . $customer_id . ' AND pesanan.deleted_at IS NULL')[0];
        $data['pesanans'] = Pesanan::with(['details' => function ($query) {
            $query->where('bagian', '!=', 'accessories');
        }, 'status'])->where('customer_id', $customer_id)->get();
        return view('pesanan.index', $data);
        // return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }

    function detail($id)
    {
        $data['pesanan'] = Pesanan::with([
            'customer',
            'sales_man',
            'status',
            'details' => [
                'tipe_kain' => [
                    'lebar',
                    'gramasi',
                    'warna',
                    'satuan'
                ],
                'warna_pesanan'
            ]
        ])->where([['id', $id], ['created_by', auth()->user()->id]])->firstOrFail();
        return view('pesanan.detail', $data);
        // return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }

    function add()
    {
        $jenis = JenisKain::select('id', 'kode', 'nama')->orderBy('nama', 'asc')->get();
        return view('pesanan.add', [
            'jenis' => $jenis
        ]);

        // return response()->json($warna, 200, [], JSON_PRETTY_PRINT);
    }

    function accesories_add($id)
    {
        $pesanan = Pesanan::with([
            'details' => function ($query) {
                $query->where('bagian', '!=', 'accessories');
                $query->with([
                    'tipe_kain' => [
                        'lebar',
                        'gramasi',
                        'warna',
                        'satuan'
                    ],
                    'warna_pesanan'
                ]);
            },
        ])->where([['id', $id], ['created_by', auth()->user()->id]])->firstOrFail();

        $accesories = Pesanan::with([
            'details' => function ($query) {
                $query->where('bagian', '!=', 'body');
                $query->with([
                    'tipe_kain' => [
                        'lebar',
                        'gramasi',
                        'warna',
                        'satuan'
                    ],
                    'warna_pesanan'
                ]);
            },
        ])->where([['id', $id], ['created_by', auth()->user()->id]])->firstOrFail();
        // return response()->json($accesories, 200, [], JSON_PRETTY_PRINT);
        return view('pesanan.add_accesories', [
            'pesanan' => $pesanan,
            'accesories' => $accesories
        ]);
    }

    public function detail_done()
    {
        return view('pesanan.detail-done');
    }

    public function detail_rating($id)
    {
        $data['pesanan'] = Pesanan::with([
            'customer',
            'sales_man',
            'status',
            'details' => [
                'tipe_kain' => [
                    'lebar',
                    'gramasi',
                    'warna',
                    'satuan'
                ],
                'warna_pesanan'
            ]
        ])->where([['id', $id], ['created_by', auth()->user()->id]])->firstOrFail();
        return view('pesanan.detail-rating', $data);
    }
    function rating_store(Request $request, $id)
    {
        $customer_id = auth()->user()->customer_id;
        CustomerExperience::updateOrCreate(
            [
                'customer_id' => $customer_id,
                'pesanan_id' => $id
            ],
            [
                'star' => $request->star,
                'message' => $request->message,
                'date_input' => date('Y-m-d H:i:s')
            ]
        );
        return redirect()->route('pesanan.index')->with('success', 'Terimasih atas penilaian anda');
    }


    public function draft_index()
    {
        $customer_id = auth()->user()->customer_id;
        $data['pesanans'] = Pesanan::with([
            'details' => [
                'tipe_kain'
            ]
        ])
            ->where([['customer_id', $customer_id], ['status_pesanan_id', 1]])
            ->get();
        return view('pesanan.draft-index', $data);
        // return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }
    public function draft_detail($id)
    {
        $data['pesanan'] = Pesanan::with([
            'customer',
            'sales_man',
            'status',
            'details' => [
                'tipe_kain' => [
                    'lebar',
                    'gramasi',
                    'warna',
                    'satuan'
                ],
                'warna_pesanan'
            ]
        ])->where([['id', $id], ['created_by', auth()->user()->id]])->firstOrFail();

        return view('pesanan.draft-detail', $data);
        // return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }
    function draft_update(Request $request, $id)
    {
        $request->validate([
            'ttd' => ['required', 'string'],
            'nomor' => ['required', 'string']
        ]);
        $image = $request->input('ttd');
        $ttd = null;
        $no_invoice = 'INV.' . time();
        if ($image) {
            $path = storage_path('app/public/ttd/');
            if (!File::isDirectory($path)) {
                File::makeDirectory($path, 0777, true, true);
            }
            $data_image = explode(";", $image)[0] ?? "data:image/png";
            $image_ext = explode("/", $data_image)[1] ?? "png";
            $fileName = $request->nomor . '.' . $image_ext;
            Image::make(file_get_contents($image))->save($path . '/' . $fileName);
            $ttd = url('/storage/ttd/' . $fileName);
        }
        Pesanan::where([['id', $id], ['created_by', auth()->user()->id]])->update([
            'status_pesanan_id' => 3,
            // 'status_kode' => 'Invoicing',
            'status_kode' => 'Approved',
            'ttd' => $ttd,
            'no_invoice' => $no_invoice,
            'approved_at' => date('Y-m-d H:i:s'),
            'approved_by' => auth()->user()->id,
            'approved_by_host' => $request->ip(),
            'approved_by_device' => Browser::browserName()
        ]);
        return redirect()->route('pesanan.checkout', $id);
        // return response()->json(['data' => $request->all()], 200, [], JSON_PRETTY_PRINT);
    }

    public function invoicing_index()
    {
        $customer_id = auth()->user()->customer_id;
        $data['pesanans'] = Pesanan::with([
            'details' => [
                'tipe_kain'
            ]
        ])
            ->where([['customer_id', $customer_id], ['status_pesanan_id', 2]])
            ->get();
        return view('pesanan.draft-index', $data);
        // return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }

    function checkout($id)
    {
        $data['pesanan'] = Pesanan::with([
            'details' => [
                'tipe_kain' => [
                    'lebar',
                    'gramasi',
                    'warna',
                    'satuan'
                ],
                'warna_pesanan'
            ]
        ])->where([['id', $id], ['created_by', auth()->user()->id]])->firstOrFail();

        $status_pesanan = "3";
        $status_kode    = "Approved";
        Pesanan::where('id', $id)->update([
            'status_pesanan_id' => $status_pesanan,
            'status_kode' => $status_kode,
        ]);

        return view('pesanan.checkout', $data);
        // return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }

    public function payment($id)
    {
        $data['pesanan'] = Pesanan::with([
            'details' => [
                'tipe_kain' => [
                    'jenis_kain',
                    'lebar',
                    'gramasi',
                    'warna',
                    'satuan'
                ],
                'warna_pesanan'
            ],
            'status'
        ])->where([['id', $id], ['created_by', auth()->user()->id]])->firstOrFail();
        $data['point'] = CustomerPoint::where('customer_id', auth()->user()->customer_id)->sum('point_total');
        return view('pesanan.payment', $data);
        // return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }

    function payment_update($id)
    {
        $customer_id = auth()->user()->customer_id;
        $total_pesanan = DetailPesanan::where('pesanan_id', $id)->sum('harga');
        $update = Pesanan::where([['id', $id], ['customer_id', $customer_id]])->update(
            [
                'status_pesanan_id' => 3
            ]
        );
        if ($update) {
            $this->setPoint($customer_id, $id, $total_pesanan);
        }

        return redirect()->route('pesanan.index');
    }

    function pesanan_done($id)
    {
        $customer_id = auth()->user()->customer_id;
        Pesanan::where([['id', $id], ['customer_id', $customer_id]])->update(
            [
                'status_pesanan_id' => 5,
                'status_kode'       => 'Done'
            ]
        );


        return redirect()->route('pesanan.rating', $id)->with('success', 'Berhasil disimpan');
    }



    public function store(Request $request)
    {
        $customer_id = auth()->user()->customer_id;
        $nomor = 'SO.' . date('Ymdhis');
        $message = "Keranjang anda masih kosong.";
        $url     = url('/pesanan-add');

        $keranjang = Keranjang::where([
            ['customer_id', $customer_id], ['checkout', 0]
        ])->get();
        if (count($keranjang) > 0) {
            $pesanan = Pesanan::create([
                'nomor' => $nomor,
                'customer_id' => $customer_id,
                'sales_man_id' => 0,
                'customer_service_id' => $this->getCs(5),
                'tanggal_pesanan' => date("Y-m-d"),
                'target_pesanan'    => $request->target_pesanan,
                'status_pesanan_id' => 1,
                'status_kode' => 'Draft',
                'created_by' => auth()->user()->id,
                'created_by_host' => $request->ip(),
                'created_by_device' => Browser::browserName()
            ]);
            foreach ($keranjang as $key => $item) {
                DetailPesanan::create([
                    'pesanan_id' => $pesanan->id,
                    'tipe_kain_id' => $item->tipe_kain_id,
                    'warna_id'     => $item->warna_id,
                    'qty'       => $item->qty,
                    'satuan'    => $item->satuan,
                    'bagian'    => 'body',
                    'created_by' => auth()->user()->id
                ]);
                for ($i = 1; $i <= $item->qty - 1; $i++) {
                    if ($item->satuan == "ROLL") {
                        DetailPesanan::create([
                            'pesanan_id' => $pesanan->id,
                            'tipe_kain_id' => $item->tipe_kain_id,
                            'warna_id'     => $item->warna_id,
                            'qty'       => $item->qty / $item->qty,
                            'satuan'    => $item->satuan,
                            'bagian'    => 'body',
                            'created_by' => auth()->user()->id
                        ]);
                    }
                }
                // accesories
                DetailPesanan::create([
                    'pesanan_id' => $pesanan->id,
                    'tipe_kain_id' => $item->accesories_id,
                    'warna_id'     => $item->warna_id,
                    'qty'       => $item->qty,
                    'satuan'    => $request->satuan_accesories,
                    'bagian'    => 'accessories',
                    'created_by' => auth()->user()->id
                ]);
            }

            $message = 'Terimakasih. Pesanan Anda sudah terkirim. Kami akan memeriksa ketersediaan barang tersebut, dan akan menyampaikan informasi kepada Anda.';
            $url     = url('/accesories-add/' . $pesanan->id);
        }
        //clear keranjang
        Keranjang::where('customer_id', $customer_id)->update(['checkout' => 1, 'updated_by' => auth()->user()->id]);

        return response()->json([
            'message' => $message,
            'count_keranjang' => count($keranjang),
            'redirectUrl'     => $url,
        ], 200);
    }

    public function accesories_store()
    {
        $message = 'Terimakasih. Pesanan Anda sudah terkirim. Kami akan memeriksa ketersediaan barang tersebut, dan akan menyampaikan informasi kepada Anda.';
        $url     = url('/pesanan-add');
        return response()->json([
            'message' => $message,
            'redirectUrl'     => $url,
        ], 200);
    }

    public function store_asc_qty(Request $request)
    {
        $request->validate([
            'qty' => 'required|numeric|min:1'
        ]);
        $id = $request->id;
        $qty = $request->qty;
        DetailPesanan::where([
            ['id', $id], ['bagian', 'accessories']
        ])->update([
            'qty' => $qty,
        ]);
        return response()->json([
            'pesan' => 'Accesories berhasil ditambahkan.',
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    function getCs($limit)
    {
        $cs = CustomerService::where('order_handle', '<=', $limit)->inRandomOrder()->first();
        return $cs->id ?? 0;
    }

    function setPoint($customer_id, $pesanan_id, $total)
    {
        $poin_before = CustomerPoint::where('customer_id', $customer_id)->sum('point_total');
        $point_amount = ceil($total / 1000);
        $point_total = $poin_before + $point_amount;
        CustomerPoint::create([
            'customer_id' => $customer_id,
            'pesanan_id' => $pesanan_id,
            'transaction_total' => $total,
            'point_date' => date('Y-m-d'),
            'point_before' => $poin_before,
            'point_amount' => $point_amount,
            'point_total' => $point_total,
            'created_by' => auth()->user()->id
        ]);
    }
}

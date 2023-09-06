<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Customer\Customer;
use App\Models\Pesanan\CustomerPoint;
use App\Models\Penjualan\InvoiceJual;
use App\Models\Penjualan\Penjualan;
use App\Models\Pesanan\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
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
        $data['customer'] = Customer::find($customer_id)->customer_category()->first();
        $data['point'] = CustomerPoint::where('customer_id', $customer_id)->sum('point_total');
        $data['total_byr'] = Pesanan::where('customer_id', $customer_id)->sum('total');
        $data['inv_byr'] = InvoiceJual::get()->sum('grand_total');
        return view('dashboard', $data);
        // return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }
}

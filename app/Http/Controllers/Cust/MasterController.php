<?php

namespace App\Http\Controllers\Cust;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\customer\customer;
use App\Models\customer\customer_category;
use App\Models\customer\customer_users;
use Illuminate\Support\Facades\DB;

class MasterController extends Controller
{
    public function index(Request $request)
    {
        $active = customer_users::where('status', 'active')->count();
        $idle = customer_users::where('status', 'idle')->count();
        $risked = customer_users::where('status', 'risked')->count();
        $reguler = customer::where('customer_category_id', '1')->count();
        $distributor = customer::where('customer_category_id', '2')->count();
        $member = customer::where('customer_category_id', '3')->count();
        $total = $active + $reguler + $member + $distributor + $idle + $risked;

        $data = DB::table('customer')
            ->leftjoin('customer_category', 'customer.customer_category_id', '=', 'customer_category.id')
            ->leftjoin('pesanan', 'customer.id', '=', 'pesanan.customer_id')
            ->select('customer.*', 'customer_category.nama as customer_category', 'pesanan.nomor');
        if ($request->has('search')) {
            $search = $request->input('search');
            $data->where(function ($query) use ($search) {
                $query->where('customer.nama', 'like', '%' . $search . '%')
                    ->orWhere('customer.alamat', 'like', '%' . $search . '%')
                    ->orWhere('customer.nohp', 'like', '%' . $search . '%')
                    ->orWhere('customer_category.nama', 'like', '%' . $search . '%')
                    ->orWhere('pesanan.nomor', 'like', '%' . $search . '%');
            });
        }
        $data = $data->get();

        return view('cust.master-index', [
            'data' => $data, 'active' => $active,  'reguler' => $reguler,
            'distributor' => $distributor, 'member' => $member, 'total' => $total, 'idle' => $idle, 'risked' => $risked
        ]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inde()
    {
        $reguler = customer::where('customer_category_id', '1')->count();
        $distributor = customer::where('customer_category_id', '2')->count();
        $member = customer::where('customer_category_id', '3')->count();

        return view('cust.customer.index');
    }

    public function add()
    {
        return view('cust.master-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
}

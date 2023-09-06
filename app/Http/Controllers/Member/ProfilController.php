<?php

namespace App\Http\Controllers\member;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer\Customer;
use App\Models\Customer\CustomerCategory;

class ProfilController extends Controller
{
    public function index()
    {
        $customer = Customer::with('customer_category')
            ->where('id', auth()->user()->customer_id)
            ->first();
        return view('profil', compact('customer'));
    }
}

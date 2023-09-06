<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class FinanceController extends Controller
{
    public function add()
    {
        return view('financing');
    }

}

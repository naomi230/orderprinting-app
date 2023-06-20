<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndividualOrderListController extends Controller
{
    //
    public function list()
    {
    return view('orderlist');
    }
}

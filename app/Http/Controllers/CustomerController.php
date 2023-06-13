<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function create()
    {

        return view('customer');
    }

    public function submitted()
    {

        return view('formsubmit');
    }
      
    public function createe()
    {

        return view('customer');
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminJobController extends Controller
{
    //
    public function jobView(){
        
        return view('adminJobs');
    }
}

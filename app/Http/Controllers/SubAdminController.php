<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SubAdminController extends Controller
{
    //


      //
    public function cruder()
    {

        $users =User::all();
       // $customers = Customer::all();
        
     return view('subAdmin', compact('users'));
       // return view('subAdmin'); 
    }



}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SuperAdminController extends Controller
{
    //
    public function cruder()
    {

        $users =User::all();
       // $customers = Customer::all();
        
     return view('superAdmin', compact('users'));
        //return view('superAdmin');
    }

}

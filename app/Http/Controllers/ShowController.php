<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Order;


class ShowController extends Controller
{
    //
    public function show()
{
    $user = Auth::user();

    $data = Order::where('user_id', $user->id)->get();;
    
    return view('dashboard', ['data' => $data]);

    
}

}



//public function index()
//{
    // Retrieve the authenticated user
   
    // Retrieve orders made by the authenticated user
   // $data = Order::where('user_id', $user->id)->get();

    //return view('orders.index', compact('data'));
//}

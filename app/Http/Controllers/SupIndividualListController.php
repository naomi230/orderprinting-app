<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;


class SupIndividualListController extends Controller
{
    //
    public function list(User $user)
    {
 // Load the orders relationship for the user
 $user->load('orders');  

 // Access the orders using the orders relationship
 $orders = $user->orders;

 return view('orderrlist', ['user' => $user, 'orders' => $orders]);
    }
    
}  




<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;

class IndividualOrderListController extends Controller
{
    //
    public function list(User $user)
    {

        $orders = $user->orders ?? [];

    return view('orderlist' , ['user' => $user, 'orders' => $orders]);
    }

   

}

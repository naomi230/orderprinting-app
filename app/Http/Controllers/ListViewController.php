<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;

class ListViewController extends Controller
{
    

    public function viewedlist(Request $request)
{
    $orderIds = $request->query('order_ids', []);

    //changin the argument into array from string
    if (!is_array($orderIds)) {
        $orderIds = explode(',', $orderIds);
    }

    
    $orders = Order::whereIn('id', $orderIds)->get();

    return view('customerAdminview', ['orders' => $orders]);
}



}

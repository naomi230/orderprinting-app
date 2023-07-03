<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderUpdate;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;



class OrderUpdatesController extends Controller
{
    public function edit($id)
    {
       // Retrieve the order from the database using the provided ID
       $order = Order::find($id);
    
       $updates = $order->orderUpdates;

       // Pass the order and updates data to the view
       return view('orderUpdates', compact('order', 'updates', 'id'));
       
      
    }
}



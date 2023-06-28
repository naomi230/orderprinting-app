<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderUpdate;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;



class AdminUpdatesController extends Controller
{
    public function updatesdb(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'status' => 'required',
            'detail' => 'required',
        ]);
    
        // Get the selected status and detail from the form
        $status = $request->input('status');
        $detail = $request->input('detail');
    
        // Create a new order update record
        $orderUpdate = OrderUpdate::create(['status' => $status, 'detail' => $detail]);
    
        // Retrieve the order ID associated with the update
        $orderId = 31; // Assuming you have the order ID available
    
        // Retrieve the corresponding order and associate it with the order update
        $order = Order::find($orderId); // Assuming you have an Order model
        $orderUpdate->order()->associate($order);
        $orderUpdate->save();
    
        // Set flash message for success
        Session::flash('success', 'Update successful!');
    
        // Redirect back to the adminUpdates page
        return redirect('/adminUpdates');
    }
    
        
}



<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderUpdate;
use App\Models\Order;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class AdminUpdatesController extends Controller
{
   // ...

   public function store(Request $request, $id)
   {
      // Retrieve the order based on the provided ID
      $order = Order::findOrFail($id);

      // Extract the status and detail from the form data
      $status = $request->input('status');
      $detail = $request->input('detail');

      // Update the order status in the database
      $order->status = $status;
      $order->save();

      // Check if an existing order update exists for the given order
      $statusUpdate = OrderUpdate::where('order_id', $order->id)->first();

      if ($statusUpdate) {
         // Update the attributes of the existing model
         $statusUpdate->status = $status;
         $statusUpdate->detail = $detail;
         $statusUpdate->save();
      } else {
         // If no existing order update is found, create a new one
         $statusUpdate = new OrderUpdate();
         $statusUpdate->order_id = $order->id;
         $statusUpdate->status = $status;
         $statusUpdate->detail = $detail;
         $statusUpdate->save();
      }

      return redirect()->back()->with('success', 'Order status updated successfully.');
   }

   public function edit($id)
   {
      // Retrieve the order from the database using the provided ID
      $order = Order::find($id);

      // Pass the order data to the view
      return view('customerAdminview', compact('order'));
   }
}

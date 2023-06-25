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

public function downloadImage($orderId)
{
    $order = Order::findOrFail($orderId);

    $filePath = public_path('uploads/' . $order->fileUpload);

    if (file_exists($filePath)) {
        $headers = [
            'Content-Type' => 'application/octet-stream',
            'Content-Description' => 'File Transfer',
            'Content-Disposition' => 'attachment; filename=' . $order->fileUpload,
        ];

        return response()->download($filePath, $order->fileUpload, $headers);
    } else {
        return redirect()->back()->with('error', 'File not found.');
    }
}

}

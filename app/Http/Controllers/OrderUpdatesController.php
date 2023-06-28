<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderUpdate;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;



class OrderUpdatesController extends Controller
{
    public function updates($orderId)
{
    // Get the authenticated user
    $user = Auth::user();

    // Retrieve the specific order for the user
    $order = $user->orders()->findOrFail($orderId);

    // Retrieve the updates for the specific order
    $updates = $order->orderUpdates;

    return view('orderupdates', ['updates' => $updates]);
    
}

}

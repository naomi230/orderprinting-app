<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;


class ShowController extends Controller
{
    //
    public function show()
{
    $data = Order::all(); // Replace 'YourModel' with the actual model name you are using
    
    return view('formsubmit', ['data' => $data]);
}

}

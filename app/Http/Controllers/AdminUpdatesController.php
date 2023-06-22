<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderUpdate;

class AdminUpdatesController extends Controller
{
    public function updatesdb(Request $request)
    {
        // Validate the form data if necessary
        // ...
        
        // Get the selected status and detail from the form
        $status = $request->input('status');
        $detail = $request->input('detail');

        // Create a new order update record
        OrderUpdate::create(['status' => $status, 'detail' => $detail]);

        // Redirect or return a response as needed
        // ...
    }
}

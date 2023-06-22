<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderUpdate;
use Illuminate\Support\Facades\Session;


class AdminUpdatesController extends Controller
{
    public function updatesdb(Request $request)
    {
       
        // .// Validate the form data
    $validatedData = $request->validate([
        'status' => 'required',
        'detail' => 'required',
    ]);

    
        
        // Get the selected status and detail from the form
        $status = $request->input('status');
        $detail = $request->input('detail');

        // Create a new order update record
        OrderUpdate::create(['status' => $status, 'detail' => $detail]);
        // Set flash message for success
        Session::flash('success', 'Update successful!');

         
        // Redirect back to the adminUpdates page
    
       return Redirect::to('/adminUpdates');
      }
        
}



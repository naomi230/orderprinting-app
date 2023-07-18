<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Order; 



class FormController extends Controller
{
    //
    public function store(Request $request)
    {
        // Validate the form data if needed
        $validatedData = $request->validate([
            'field1' => 'required',
            'field2' => 'required',
            'field3' => 'required',
            'field4' => 'required',
            'field5' => 'required',
            'field6' => 'required',
            'detail'=>'required',
            'fileUpload' => 'required|image|mimes:jpeg,jpg,png,pdf|max:2048',
            // Add validation rules for other fields
        ]);




        // Assign values for other fields
        $order = Order::create($validatedData);

        $order->user_id = auth()->id();

        // Save the order
        $order->save();
       
        // Handle file upload
        if ($request->hasFile('fileUpload')) {
            $file = $request->file('fileUpload');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('uploads'), $fileName);
            $order->fileUpload = $fileName;
            $order->save();
        }

       
        return Redirect::to('/dashboard');
    }
}


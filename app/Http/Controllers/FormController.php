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
          
        ]);




        // Assign values for other fields
        $validatedData['user_id'] = auth()->id();
        
       
       
        // Handle file upload
        if ($request->hasFile('fileUpload')) {
            $file = $request->file('fileUpload');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('uploads'), $fileName);
            $validatedData['fileUpload'] = $fileName;
        }

        Order::create($validatedData);


        
       
        return Redirect::to('/dashboard');
    }
}


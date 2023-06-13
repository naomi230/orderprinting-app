<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Order; // Replace ModelName with the actual name of your model



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

        // Create a new instance of your model
        //$model = new Order($validatedData);
//you can also use the above to avoid continuous manual input
        /*$model = new Order;
        $model->field1 = $request->input('field1');
        $model->field2 = $request->input('field2');
        $model->field3 = $request->input('field3');
        $model->field4 = $request->input('field4');
        $model->field5 = $request->input('field5');
        $model->field6 = $request->input('field6');
        $model->detail = $request->input('detail');*/

        // Assign values for other fields
        $order = Order::create($validatedData);
       
        // Handle file upload
        if ($request->hasFile('fileUpload')) {
            $file = $request->file('fileUpload');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('uploads'), $fileName);
            $order->fileUpload = $fileName;
            $order->save();
        }

       // return redirect()->route('orders.index')->with('success', 'Order created successfully');
    

        // Save the model to the database
       // $model->save();


        // Log::debug('Model saved successfully.');
        // Redirect to a success page or do something else
        return redirect()->route('formsubmit');
        //return redirect()->back()->with('success', 'Order submitted successfully.');
        //return Redirect::to('/formsubmit');
    }
}


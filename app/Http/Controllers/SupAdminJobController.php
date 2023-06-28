<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class AdminJobController extends Controller
{
    //
    public function jobView(){
        
        
        $images = Image::latest()->get();

        return view('subadminJobs', compact('images'));
    }
    public function store( Request $request){

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $imageName);

        Image::create(['filename' => $imageName]);

        return redirect()->route('supadminJobs')
            ->with('success', 'Image uploaded successfully.');
    

    }
}

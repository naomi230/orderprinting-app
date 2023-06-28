<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ExploreController extends Controller
{
    //
    public function explore(){
        

        $images = Image::all();
        
    
        return view('customerExplore', compact('images'));
    }
}

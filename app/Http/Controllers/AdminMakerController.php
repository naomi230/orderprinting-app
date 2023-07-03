<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;



class AdminMakerController extends Controller
{
public function makeAdmin(Request $request, $id)
{
    $user = User::find($id);
    if ($user) {
        $user->utype = 'adm';
        $user->save();
    }
    return redirect()->back();
}


    
}

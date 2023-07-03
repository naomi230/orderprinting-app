<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserDeleteController extends Controller
{
    //
    public function destroy($id)
    {
        // Find the user by ID
        $user = User::findOrFail($id);

        // Delete the user
        $user->delete();

        // Redirect or return a response
        return redirect()->route('superAdmin')->with('success', 'User deleted successfully');
    }
}

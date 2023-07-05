<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserDeleteController extends Controller
{
    //
    public function destroy($id)
{
    try {
        dd($id);
        // Find the user by ID
        $user = User::findOrFail($id);

        // Delete the user
        $user->delete();

        // Redirect or return a response
        return redirect()->route('superAdmin')->with('success', 'User deleted successfully');
    } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
        // Handle the case where the user is not found
        return redirect()->route('superAdmin')->with('error', 'User not found.');
    }
}

}

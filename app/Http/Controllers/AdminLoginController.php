<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    // Show the admin login form
    public function loginn()
    {
        return view('admin.login');
    }

    // Handle the admin login form submission
    public function loginny(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            // Authentication successful, redirect to admin dashboard or desired page
            return redirect()->route('admin.dashboard');
        } else {
            // Authentication failed, redirect back to the login form with error message
            return redirect()->route('admin.login')->with('error', 'Invalid credentials');
        }
    }

    // Logout the admin user
    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect()->route('admin.login');
    }
}

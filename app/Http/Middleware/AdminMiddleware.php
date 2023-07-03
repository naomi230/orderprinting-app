<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use \Illuminate\Auth\Middleware\Authenticate;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $userRole
     * @return mixed
     */
    public function handle(Request $request, Closure $next,  $userRole = 'User')
    {   
        // Exclude the welcome route from authentication
    if ($request->is('/')) {
        return $next($request);
    }
       
        if (auth()->check() && auth()->user()->role == $userRole) {
            return $next($request);
        }

        return redirect('login')->with('message', 'Access denied as you are not an admin');
    }
}

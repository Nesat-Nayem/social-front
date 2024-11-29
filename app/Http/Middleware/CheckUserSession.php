<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;


class CheckUserSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

         // Check if session has the required data
         if (Session::has('auth_token') && Session::has('user_name') && Session::has('user_userName')) {
            // Session data exists, continue to the requested page (home page)
            return $next($request);
        }

       else{
         // Session data doesn't exist, redirect to login page
          return redirect()->route('login');
    }


    }
}

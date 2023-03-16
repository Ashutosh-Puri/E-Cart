<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
   
    public function handle(Request $request, Closure $next): Response
    {
        if(!Auth::user()->role=='1')
        {
            return redirect('/login')->with('d-status', 'Access Denied . As you are not Admin.');
        }
        return $next($request);
    }
}


<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    { 
        if ( Session()->has('loginId') && Session()->get("Role")  == "Admin") {   
            return $next($request);
        }else{ 
            return redirect('/');  
        } 
    }
}

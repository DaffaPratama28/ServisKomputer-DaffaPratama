<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->user()->level == 'admin' || auth()->user()->level == 'pegawai' || auth()->user()->level == 'customer' ){
            return $next($request);
        }
          
        return response()->json(['You do not have permission to access for this page.']);
    }
}

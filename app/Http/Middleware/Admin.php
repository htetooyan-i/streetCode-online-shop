<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the session has a 'role'
        // if (!$request->session()->has('role')) {
        //     return redirect('admin');
        // }

        // Dump session data for debugging purposes
        // dd($request->session()->all());

        // Proceed with the next middleware or request
        return $next($request);
    }
}

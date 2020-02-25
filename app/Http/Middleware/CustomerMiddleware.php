<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CustomerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if( Auth::check() && Auth::user()->role_id == 2 )
        {
            return $next($request);
        }
        return response()->json([
            'status'    => 401,
            'message'   => "Unauthorized Request",
            'data'      => "You are not allowed for this request"
        ],401);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::seller()->isAdmin == '1')
        {
            return $next($request);
        }
        else
        {
            return redirect('/buyer')->with('status', "You don't have permission to access Seller's Dashboard!");
        }
    }
}

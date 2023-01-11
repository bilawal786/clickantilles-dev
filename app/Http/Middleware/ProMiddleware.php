<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ProMiddleware
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
        if (Auth::user()->role == '1'){
            $notification = array(
                'messege' => 'Unauthorized',
                'alert-type' => 'error'
            );
            return redirect()->route('front.index')->with($notification);
        }else{
            return $next($request);
        }
    }
}

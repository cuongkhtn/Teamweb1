<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class adminlogin
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
        if(Auth::check())
            {
                if(Auth::user()->loaiuser==1)
                    {
                        return $next($request);
                    }   
                else
                    return redirect('360qt69');     
            }
        else
            return redirect('360qt69');
    }
}

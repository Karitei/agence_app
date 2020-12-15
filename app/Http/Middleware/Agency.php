<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Agency
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
        if(!Auth::check()){
            return redirect()->route('login');
        }

        /// Role = 0 => Admin
        if(Auth::user()->role =="0"){
            return redirect()->route('admin_dashboard');
        }

        /// Role = 1 => Agency
        if(Auth::user()->role =="1"){

            return $next($request);
        }

        /// Role = 2 => Buisness
        if(Auth::user()->role =="2"){
            return redirect()->route('buisness_dashboard');
        }
    }
}

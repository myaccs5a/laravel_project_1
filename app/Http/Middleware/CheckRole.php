<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;

class CheckRole
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
        if(Auth::check()==false){
            return redirect()->route('get.login');
       }
       if(Auth::user()->role != config('role.admin') ){
         return redirect()->route('member.index');
        }
        return $next($request);
    }
}

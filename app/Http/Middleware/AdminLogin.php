<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminLogin
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
       if(Auth::check()) {
           $user = Auth::User();
           if($user->level == 1) {
               return $next($request);
           }else{
               return back()->with('note','Ban khong co quyen');
           }
       }else{
           return redirect('login');
       }
    }
}

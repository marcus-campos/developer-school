<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class PremiumVideos
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
            if (Auth::user()->role != 'premium_student') {
                return redirect()->to(route('subscription'));
            }
            return $next($request);
        }
       else
           return redirect()->to(route('auth.login.form'));
    }
}

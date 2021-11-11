<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateAdmin
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
<<<<<<< HEAD
        if(Auth::user()->role == 1){
            return $next($request);
          }

          return redirect()->route('login');
=======
        if(Auth::user()->role != 2 && Auth::user()->role != 3){
            return $next($request);
          }

        return redirect()->route('login');
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
    }

}

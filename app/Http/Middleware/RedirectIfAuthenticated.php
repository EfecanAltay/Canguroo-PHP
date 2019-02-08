<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */

    public function handle($request, Closure $next, $guard = null)
    {  
        if (Auth::guard($guard)->check()) {

            $user = Auth::user();

            return redirect('/')->with(['name' => $user->name , 'id' => $user->id , 'email' => $user->email ] );
        }
        return $next($request);
    }
}

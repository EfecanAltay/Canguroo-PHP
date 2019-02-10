<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
        $userData = null ;
        if (Auth::check())
        {
            //$user = Auth::user();
            //$userData = array('name' => $user->name,'email' => $user->email ,'id' => $user->id );   
            // The user is logged in...
            if (Auth::viaRemember())
            {
                //
            }
        }
    }
}

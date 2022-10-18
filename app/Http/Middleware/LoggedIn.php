<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class LoggedIn
{
    public function handle($request, $next)
    {
        if (!Auth::user()) {
            return redirect('/login');
        } else {
            return $next($request);
        }
    }
}

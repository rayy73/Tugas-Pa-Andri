<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class inilogin
{
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect('/login'); // kalau belum login, arahkan ke login
        }
        return $next($request);
    }
}

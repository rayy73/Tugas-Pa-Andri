<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class iniTamu
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            return redirect('/'); // kalau udah login, jangan bisa ke halaman login lagi
        }
        return $next($request);
    }
}

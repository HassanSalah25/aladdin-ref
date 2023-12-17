<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class FirstSessionMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if ((Session::has('previous_session_id') && Session::get('previous_session_id') !== session()->getId())
            || Auth::check()) {
            // Session is started
            Session::forget('div_visible');
        } else {
            // Store the current session ID for future comparisons
            Session::put('previous_session_id', session()->getId());
        }
        return $next($request);
    }
}

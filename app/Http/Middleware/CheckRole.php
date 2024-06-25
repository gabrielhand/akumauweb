<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            if (Auth::user()->role == "Admin") {
                return $next($request);
            } elseif (Auth::user()->role == "Member") {
                return redirect(route('home'));
            } elseif (Auth::user()->role == "Gold") {
                return redirect(route('home'));
            } else if (Auth::user()->role == "Platinum") {
                return redirect(route('home'));
            }
        }
    }
}

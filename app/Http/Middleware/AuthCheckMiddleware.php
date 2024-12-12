<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthCheckMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            switch (Auth::user()->getRoleNames()->first()) {
                case 'admin':
                    return redirect()->route('admin.dashboard');
                case 'retailer':
                    return redirect()->route('retailer.dashboard');
                case 'customer':
                    return redirect()->route('customer.dashboard');
            }
        }
        return $next($request);
    }
}


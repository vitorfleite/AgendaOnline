<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $roles)
    {

        $user = Auth::user();

        if ($roles == 'admin')
        {
            if ($user->isAdmin()) {
                return $next($request);
            }
        }

        if ($roles == 'finance')
        {
            if ($user->isAdmin()) {
                return $next($request);
            }
            if ($user->isFinance()) {
                return $next($request);
            }
        }
        
        if ($roles == 'service')
        {
            if ($user->isAdmin()) {
                return $next($request);
            }
            if ($user->isService()) {
                return $next($request);
            }
        }

        if ($roles == 'support')
        {
            if ($user->isAdmin()) {
                return $next($request);
            }
            if ($user->isFinance()) {
                return $next($request);
            }
        }

        return redirect('home');
    }
}

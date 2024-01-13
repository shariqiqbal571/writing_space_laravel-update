<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        // foreach ($guards as $guard) {
        //     if (Auth::guard($guard)->check()) {
        //         if (Auth::user()->role_id === 1) {
        //             return redirect()->route('admin.dashboard');
        //         } elseif (Auth::user()->role_id === 2) {
        //             return redirect()->route('member.dashboard');
        //         } 
        //     }
        // }

        // return $next($request);

        // foreach ($guards as $guard) {
        //     if (Auth::guard($guard)->check()) {
        //         $user = Auth::user();
        
        //         if ($user->hasRole('is_admin')) {
        //             return redirect()->route('admin.dashboard');
        //         } elseif ($user->hasRole('user')) {
        //             return redirect()->route('user.dashboard');
        //         } 
        //     }
        // }
        
        // Handle scenarios where the user is not authenticated or roles don't match
        
    
       
        // return $next($request);

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);

    }
}

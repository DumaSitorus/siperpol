<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated as RedirectIfAuthenticatedMiddleware;

class RedirectAuthenticated extends RedirectIfAuthenticatedMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response | JsonResponse
    {
        if(Auth::guard('admin_sdm')->check()){
            return redirect(route('admin_sdm.dashboard'));
        } else if (Auth::guard('police_pns')->check()){
            return redirect(route('police_pns.dashboard'));
        } else if (Auth::guard('kawapolres')->check()){
            return redirect(route('kawapolres.dashboard'));
        } else if (Auth::guard('department_head')->check()){
            return redirect(route('department_head.dashboard'));
        }
        return $next($request);
    }
}

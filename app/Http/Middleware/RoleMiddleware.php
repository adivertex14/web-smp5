<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $allowedRoles = $request->route()->defaults['roles'] ?? [];

        if (!Auth::check()) {
            abort(403, 'Harus login');
        }

        $userRole = Auth::user()->role;

        if (!in_array($userRole, $allowedRoles)) {
            abort(403, 'Akses ditolak');
        }
        return $next($request);
    }
}

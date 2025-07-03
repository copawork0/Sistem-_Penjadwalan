<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (!in_array(auth()->user()->role, $roles)) {
            abort(403, 'Akses ditolak.');
        }
        return $next($request);
    }
} 
<<<<<<< HEAD
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
=======
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
>>>>>>> a148e2d54188b024776fd58f323a6b3508647fb5
} 
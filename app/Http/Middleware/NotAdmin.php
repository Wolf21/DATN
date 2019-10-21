<?php

namespace App\Http\Middleware;

use App\Enums\Role;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotAdmin
{
    /**
     * Check role Admin.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::guard()->check()) {
            if (in_array(Auth::user()->role, [Role::ADMIN, Role::SUPER_USER])) {
                abort(401);
            }
        }

        return $next($request);
    }
}

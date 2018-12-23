<?php

namespace App\Http\Middleware;

use App\Enums\Role;
use Closure;
use Illuminate\Support\Facades\Auth;

class NotAdmin
{
    /**
     * Check role Admin.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::guard()->check()) {
            if (Auth::user()->role == Role::ADMIN) {
                abort(401);
            }
        }

        return $next($request);
    }
}

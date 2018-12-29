<?php

namespace App\Http\Middleware;

use App\Enums\Role;
use Closure;
use Illuminate\Support\Facades\Auth;

class AdminAndSuperUser
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
            if (!in_array(Auth::user()->role,[Role::ADMIN, Role::SUPER_USER]) ) {
                abort(401);
            }
        }
        return $next($request);
    }
}

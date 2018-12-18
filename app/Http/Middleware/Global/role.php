<?php

use App\Enums\Guard;
use Illuminate\Support\Facades\Auth;

/*
 * Get role name of user login.
 *
 * @return string.
 */
function getRole()
{
    if (Auth::guard()->check()) {
        return Auth::user()->role;
    }
    return '';
}

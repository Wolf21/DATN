<?php

namespace App\Http\Controllers\Auth;

use App\Enums\Role;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Services\LoginService;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * handler login
     *
     * @param LoginRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public static function login(LoginRequest $request)
    {
        $inputs = $request->only('name', 'password');
        $user = LoginService::getUserByName($inputs['name']);
        $message = LoginService::getMessage($user);
        if (empty($message) && Auth::attempt($inputs)) {
            if ($user->role == Role::ADMIN) {
                return redirect(url('/admin'));
            } else {
                return redirect(url('/'));
            }
        }
        Session::flash('error', $message['msg']);
        return redirect()->back();
    }

}

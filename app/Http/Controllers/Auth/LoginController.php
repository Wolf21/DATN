<?php

namespace App\Http\Controllers\Auth;

use App\Enums\Role;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Services\LoginService;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
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
        $inputs = $request->only('user_name', 'password');
        Input::flashExcept('password');
        $user = LoginService::getUserByName($inputs['user_name']);
        $message = LoginService::getMessage($user);
        if (empty($message) && Auth::attempt($inputs)) {
            if (in_array($user->role, [Role::ADMIN, Role::SUPER_USER])) {
                return redirect(url('/admin/home'));
            } else {
                return redirect(url('/'));
            }
        }
        Session::flash('error', $message['msg']);
        return redirect()->back();
    }

    /**
     * Handle a logout request to the application.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        $redirect = Auth()->user()->role == Role::USER ? url('') : route('loginForm');
        Auth::guard()->logout();
        return redirect($redirect);
    }
}

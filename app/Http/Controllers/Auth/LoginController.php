<?php

namespace mooc\Http\Controllers\Auth;

use Illuminate\Http\Request;
use mooc\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        $roles=$this->guard()->user()->roles;
        foreach ($roles as $role) {
            if ($role->name == "ROLE_ADMIN") {
                return redirect("/admin");
            } elseif ($role->name == "ROLE_STUDENT") {
                return redirect("/home");
            }
        }
//        return $this->authenticated($request, $this->guard()->user())
//            ?: redirect()->intended($this->redirectPath());
    }
}

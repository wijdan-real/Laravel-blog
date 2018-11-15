<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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

    protected function authenticated(Request $request, $user)
    {
        // to admin dashboard
        if($user->isAdmin()) {
            return redirect(route('admin-panel'));
        }

        // to user dashboard
        else if($user->isUser()) {
            return redirect(route('user-panel'));
        }

        abort(404);
    }



    /**
     * Create a new controller instance.
     *
     * @return void
     *
     *  public function getlogin(Request $request)
    {

    return view('auth.login');
    }
    protected $redirectTo = '/home';

    public function __construct()
    {
    $this->middleware('guest', ['except' => 'logout']);
    }
     *
     */

}

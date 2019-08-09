<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected function authenticated()
    {
        if ( Auth::user()->user_type_id != 4) {// do your margic here
            return redirect()->route('dashboard');
        }
        else{
            return redirect('/home');
        }

    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function logout(Request $request){
        Auth::logout();
        return redirect('/login');
    }
}

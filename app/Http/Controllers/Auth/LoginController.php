<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
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

    // protected $redirectTo = RouteServiceProvider::HOME;
    protected function  authenticated()
    {
        if(Auth::user()->role=='1')
        {
            return redirect('admin')->with('s-status','Welcome Admin To Dashboard');
        }
        else if(Auth::user()->role=='0')
        {
            return redirect('/')->with('s-status','Logged in Successfully.');
        }
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}

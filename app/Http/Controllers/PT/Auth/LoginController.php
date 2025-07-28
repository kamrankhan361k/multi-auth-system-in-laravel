<?php

namespace App\Http\Controllers\PT\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
     use AuthenticatesUsers;

    protected $redirectTo = '/pt/dashboard';

    public function __construct()
    {
        $this->middleware('guest:pt')->except('logout');
    }

    public function showLoginForm()
    {
        return view('pt.auth.login');
    }

    protected function guard()
    {
        return Auth::guard('pt');
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        return redirect()->route('pt.login');
    }
}

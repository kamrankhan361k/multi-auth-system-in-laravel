<?php

namespace App\Http\Controllers\Family\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
     use AuthenticatesUsers;

    protected $redirectTo = '/family/dashboard';

    public function __construct()
    {
        $this->middleware('guest:family')->except('logout');
    }

    public function showLoginForm()
    {
        return view('family.auth.login');
    }

    protected function guard()
    {
        return Auth::guard('family');
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        return redirect()->route('family.login');
    }
}

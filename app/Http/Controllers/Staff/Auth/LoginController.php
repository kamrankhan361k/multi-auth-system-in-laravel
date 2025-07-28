<?php

namespace App\Http\Controllers\Staff\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
     use AuthenticatesUsers;

    protected $redirectTo = '/staff/dashboard';

    public function __construct()
    {
        $this->middleware('guest:staff')->except('logout');
    }

    public function showLoginForm()
    {
        return view('staff.auth.login');
    }

    protected function guard()
    {
        return Auth::guard('staff');
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        return redirect()->route('staff.login');
    }
}

<?php

namespace App\Http\Controllers\Student\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
     use AuthenticatesUsers;

    protected $redirectTo = '/student/dashboard';

    public function __construct()
    {
        $this->middleware('guest:student')->except('logout');
    }

    public function showLoginForm()
    {
        return view('student.auth.login');
    }

    protected function guard()
    {
        return Auth::guard('student');
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        return redirect()->route('student.login');
    }
}

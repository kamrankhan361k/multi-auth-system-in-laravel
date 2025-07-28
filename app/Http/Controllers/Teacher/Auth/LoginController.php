<?php

namespace App\Http\Controllers\Teacher\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
     use AuthenticatesUsers;

    protected $redirectTo = '/teacher/dashboard';

    public function __construct()
    {
        $this->middleware('guest:teacher')->except('logout');
    }

    public function showLoginForm()
    {
        return view('teacher.auth.login');
    }

    protected function guard()
    {
        return Auth::guard('teacher');
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        return redirect()->route('teacher.login');
    }
}

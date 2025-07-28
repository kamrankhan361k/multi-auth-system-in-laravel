<?php

namespace App\Http\Controllers\Board\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
     use AuthenticatesUsers;

    protected $redirectTo = '/board/dashboard';

    public function __construct()
    {
        $this->middleware('guest:board')->except('logout');
    }

    public function showLoginForm()
    {
        return view('board.auth.login');
    }

    protected function guard()
    {
        return Auth::guard('board');
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        return redirect()->route('board.login');
    }
}

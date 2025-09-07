<?php

namespace App\Http\Controllers\Board\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:board')->except('logout');
    }

    public function showLoginForm()
    {
        return view('board.auth.login'); // create this Blade view
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('board')->attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended('/board/dashboard');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::guard('board')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('board.login');
    }
}

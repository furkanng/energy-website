<?php

namespace App\Http\Controllers\Admin\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('user.pages.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('panel.home');
        } else {
            return redirect()->route('panel.login')->with('error', 'Giriş başarısız.');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('panel.login')->with('error', 'Giriş başarısız.');
    }
}

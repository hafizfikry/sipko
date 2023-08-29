<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ], [
            'email.required' => 'Form Email harus diisi!',
            'email.email' => 'Anda tidak bisa login selain menggunakan email!',
            'password.required' => 'Form Password harus diisi!',
        ]);
        if (Auth::guard('pengguna')->attempt($credentials))
            return redirect('/index');
         elseif (Auth::guard('user')->attempt($credentials)) {
         return redirect('/index');
        } 
        return back()->withErrors([
            'email' => 'Email yang anda masukan tidak sesuai atau tidak terdaftar',
        ]);
        // dd($request->all());
    }

    public function logout(Request $request)
    {
        if(Auth::guard('pengguna')->check()){
            Auth::guard('pengguna')->logout();
        } elseif (Auth::guard('user')->check()){
            Auth::guard('user')->logout();
        }
        return redirect('/login');
    }
}

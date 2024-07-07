<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function Register()
    {
        return view('register');
    }
    public function postRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|Email',
            'password' => 'required',
        ]);
        User::create($request->all());
        return redirect('register')->with('success', 'Pendaftaran Berhasil');
    }

    public function Login()
    {
        return view('login');
    }
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->to('home');
        }
        return back();
    }

}
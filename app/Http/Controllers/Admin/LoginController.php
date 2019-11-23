<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{


    
    public  function getLogin()
    {
        return view('backend.auth.login');
    }
    public  function postLogin(LoginRequest $request)
    {
        $data = $request->only('email', 'password');
        if (Auth::attempt($data)) {
            
            return redirect()->route('home');
        }
        return redirect()->route('get.login');
    }

    public  function logout()
    {
        Auth::guard()->logout();
        return redirect()->route('get.login');
    }
}

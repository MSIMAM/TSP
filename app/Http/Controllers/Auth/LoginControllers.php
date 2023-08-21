<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class LoginControllers extends Controller
{
    public function login()
    {
        return view('auth.login');
    }


    public function authenticate(Request $request)
    {

        $request->validate([
            'email'     => 'required',
            'password'  => 'required'
        ]);

        $email      = $request->email;
        $password   = $request->password;

        if (Auth::attempt(['email' => $email, 'password' => $password, 'status' => 'Active'])) {
            toast('Welcome '.Auth::user()->name.'', 'success');
            return redirect(RouteServiceProvider::HOME);
        }else {
            toast('Error Login', 'error');
            return redirect()->back();
        }


    }
}

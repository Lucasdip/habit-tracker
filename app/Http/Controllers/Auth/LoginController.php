<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


   class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }


    public function authenticate(Request $request)
     {
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');

        if(Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'Credenciais Inválidas',
        ])->withInput($request->only('email', 'remember'));
    }

    }


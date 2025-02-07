<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;


class LoginController extends Controller {
    

    public function showLoginForm()
    {
        return view('auth.login');
    }


    public function login(Request $request)
    {
        // Validació
        $credentials = $request->validate([
            'username' => ['required', 'text'],
            'name' => ['required', 'min:6'],
        ]);

        if (Auth::attempt($credentials)) {
            //Login correcto
            return redirect()->intended('home');
        }

        return back()->withErrors([
            'email' => 'No existeix el usuari.',
        ]);
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

}

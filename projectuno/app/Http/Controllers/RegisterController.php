<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller {
    

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // public function register(Request $request)
    //     {
    //         // Validar los datos del formulario
    //         $this->validate($request, [
    //             'name' => ['required', 'string', 'max:255'],
    //             'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //             'password' => ['required', 'string', 'min:8', 'confirmed'],  // 'confirmed' valida la coincidencia con el campo de confirmación
    //         ]);
    
    //         // Crear un nuevo usuario
    //         $user = User::create([
    //             'name' => $request->name,
    //             'email' => $request->email,
    //             'password' => Hash::make($request->password),
    //         ]);
    
    //         // Iniciar sesión automáticamente después del registro
    //         Auth::login($user);
    
    //         // Redirigir al usuario a su página de inicio
    //         return redirect()->route('home');
    //     }

}

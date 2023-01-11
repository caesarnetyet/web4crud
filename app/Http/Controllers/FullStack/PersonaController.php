<?php

namespace App\Http\Controllers\FullStack;

use App\Http\Controllers\Controller;
use App\Models\Persona;
use Illuminate\Http\Request;


class PersonaController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function register(Request $request){
        $user = new Persona();
        $user->nombre = $request->nombre;
        $user->apellido = $request->apellido;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('mascotas', ['user' => $user->id]);
    }
}

<?php

namespace App\Http\Controllers\FullStack;

use App\Http\Controllers\Controller;
use App\Models\Mascota;
use App\Models\Persona;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    public function index(Request $request)
    {

        $persona = Persona::find($request->user);
        $mascotas = Mascota::all();
        if (!empty($persona)) {
            return view('mascotas', ['persona' => $persona, 'mascotas' => $mascotas]);
        }
        return view('mascotas', ['mascotas' => $mascotas]);
    }

    public function agregar(Request $request, $persona_id){
        $mascota = new Mascota();
        $persona = Persona::findOrFail($persona_id);
        $mascota->nombre = $request->nombre;
        $mascota->raza = $request->raza;
        $mascota->color = $request->color;
        $persona->mascotas()->save($mascota);
        return redirect()->route('mascotas', ['user' => $request->persona_id]);
    }

    public function eliminar($persona_id, $mascota_id){
        $persona = Persona::findOrFail($persona_id);
        $persona->mascotas()->where('id', $mascota_id)->delete();
        return redirect()->route('mascotas', ['user' => $persona_id]);
    }
}

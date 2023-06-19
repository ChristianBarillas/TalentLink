<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Carrera;
use App\Models\Universidad;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    //
    public function  index()
    {
        $estudiante = Estudiante::all();
        return view("aplica", ["estudiante" => $estudiante]);
    }

    public function viewForm()
    {
        $carrera = Carrera::all();
        return view("aplica", ["carrera" => $carrera]);
    }

    public function store(Request $request)
    {
        $estudiante = new Estudiante();
        $estudiante->nombre = $request->post('nombre');
        $estudiante->apellido = $request->post('apellido');
        $estudiante->correo = $request->post('correo');
        $estudiante->telefono = $request->post('telefono');
        $estudiante->id_carrera = $request->post('carrera');

        $estudiante->save();

        return redirect()->route('getEstudiante');
    }
}

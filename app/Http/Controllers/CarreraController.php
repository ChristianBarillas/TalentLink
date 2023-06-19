<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    public function index(Request $request)
    {
        $buscar = trim($request->post('buscar'));
        $carrera = Carrera::select('nombre')->where('nombre', 'LIKE', '%' . $buscar . '%')->get();
        return view('carrera', compact('carrera', 'buscar'));
    }
}

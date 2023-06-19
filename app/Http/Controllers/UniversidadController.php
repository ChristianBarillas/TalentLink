<?php

namespace App\Http\Controllers;

use App\Models\Universidad;
use Illuminate\Http\Request;

class UniversidadController extends Controller
{
    public function index(Request $request)
    {
        $buscar = trim($request->post('buscar'));
        $universidad = Universidad::select('nombre')->where('nombre', 'LIKE', '%' . $buscar . '%')->get();
        return view('universidad', compact('universidad', 'buscar'));
    }
}

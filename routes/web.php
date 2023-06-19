<?php

use App\Http\Controllers\CarreraController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\UniversidadController;
use App\Models\Estudiante;
use App\Models\Universidad;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('inicio');

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/save', [EstudianteController::class, 'store'])->name('saveEstudiante');
Route::get('/estudiante', [EstudianteController::class, 'index'])->name('getEstudiante');
Route::get('/form', [EstudianteController::class, 'viewForm'])->name('formEstudiante');


Route::get('/carrera', [CarreraController::class, 'index'])->name('getCarrera');
Route::get('/universidad', [UniversidadController::class, 'index'])->name('getUniversidad');

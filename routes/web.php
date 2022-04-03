<?php

use App\Http\Controllers\ActividadesController;
use App\Http\Controllers\EscuelasController;
use App\Http\Controllers\HorariosController;
use App\Http\Controllers\PersonasController;
use App\Http\Controllers\ProfesoresController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// User
Route::get('/', function () {
    return view('index');
});

// Zempoala info
Route::get('/about', function () {
    return view('info_zempoala');
});

Route::post('/', [PersonasController::class, 'store']);

// Admin
Route::get('/admin', function () {
    $numero_escuelas_registradas = DB::table('escuelas')->count();
    $numero_personas_registradas = DB::table('personas')->count();
    $numero_horarios_registrados = DB::table('horarios')->count();
    $numero_actividades_registradas = DB::table('actividades')->count();
    $numero_profesores_registrados = DB::table('profesores')->count();

    return view('admin.admin', compact('numero_escuelas_registradas', 'numero_personas_registradas', 'numero_horarios_registrados', 'numero_actividades_registradas', 'numero_profesores_registrados'));
})->name('admin');

// Escuelas
Route::get('/admin/escuelas', function (){
    $escuelas = DB::table('escuelas')->get();
    return view('admin.escuelas.admin_escuelas', compact('escuelas'));
})->name('escuelas');
Route::post('/admin/escuelas', [EscuelasController::class, 'store'])->name('escuelas.store');
Route::post('/admin/escuelas/{id}', [EscuelasController::class, 'update'])->name('escuelas.update');
Route::delete('/admin/escuelas/{id}', [EscuelasController::class, 'destroy'])->name('escuelas.destroy');

// Horarios
Route::get('/admin/horarios', function (){
    $horarios = DB::table('horarios')->get();
    return view('admin.horarios.admin_horarios', compact('horarios'));
})->name('horarios');
Route::post('/admin/horarios', [HorariosController::class, 'store'])->name('horarios.store');
Route::post('/admin/horarios/{id}', [HorariosController::class, 'update'])->name('horarios.update');
Route::delete('/admin/horarios/{id}', [HorariosController::class, 'destroy'])->name('horarios.destroy');

// Profesores
Route::get('/admin/profesores', function (){
    $profesores = DB::table('profesores')->get();
    return view('admin.profesores.admin_profesores', compact('profesores'));
})->name('profesores');
Route::post('/admin/profesores', [ProfesoresController::class, 'store'])->name('profesores.store');
Route::post('/admin/profesores/{id}', [ProfesoresController::class, 'update'])->name('profesores.update');
Route::delete('/admin/profesores/{id}', [ProfesoresController::class, 'destroy'])->name('profesores.destroy');

// Actividades
Route::get('/admin/actividades', function (){
    $actividades = DB::table('actividades')->get();
    $escuelas = DB::table('escuelas')->get();
    $profesores = DB::table('profesores')->get();
    $horarios = DB::table('horarios')->get();
    return view('admin.actividades.admin_actividades', compact('actividades', 'escuelas', 'profesores', 'horarios'));
})->name('actividades');
Route::post('/admin/actividades', [ActividadesController::class, 'store'])->name('actividades.store');
Route::post('/admin/actividades/{id}', [ActividadesController::class, 'update'])->name('actividades.update');
Route::delete('/admin/actividades/{id}', [ActividadesController::class, 'destroy'])->name('actividades.destroy');

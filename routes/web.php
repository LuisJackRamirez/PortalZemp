<?php

use App\Http\Controllers\ActividadesController;
use App\Http\Controllers\EscuelasController;
use App\Http\Controllers\ImageCarrouselController;
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



Route::get('/', function () {
    return view('index');
})->name('index');

// Zempoala info
Route::get('/sobre_nosotros', function () {
    return view('about');
})->name('about');

// Servicios
Route::get('/servicios', function () {
    return view('services');
})->name('services');

// Contacto
Route::get('/contacto', function () {
    return view('contact');
})->name('contact');

Route::post('/', [PersonasController::class, 'store']);


// Admin

Route::get('/dashboard', function () {
    $images = DB::table('image_carrousel')->get();
    $numero_escuelas_registradas = DB::table('escuelas')->count();
    $numero_personas_registradas = DB::table('personas')->count();
    $numero_actividades_registradas = DB::table('actividades')->count();
    $numero_profesores_registrados = DB::table('profesores')->count();
    return view('dashboard', compact('images','numero_escuelas_registradas', 'numero_personas_registradas', 'numero_actividades_registradas', 'numero_profesores_registrados'));
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/admin', function () {
})->name('admin');

// Escuelas
Route::get('/dashboard/escuelas', function (){
    $escuelas = DB::table('escuelas')->get();
    return view('admin.escuelas.admin_escuelas', compact('escuelas'));
})->name('escuelas');
Route::post('/dashboard/escuelas', [EscuelasController::class, 'store'])->name('escuelas.store');
Route::post('/dashboard/escuelas/{id}', [EscuelasController::class, 'update'])->name('escuelas.update');
Route::delete('/dashboard/escuelas/{id}', [EscuelasController::class, 'destroy'])->name('escuelas.destroy');

// Profesores
Route::get('/dashboard/profesores', function (){
    $profesores = DB::table('profesores')->get();
    return view('admin.profesores.admin_profesores', compact('profesores'));
})->name('profesores');
Route::post('/dashboard/profesores', [ProfesoresController::class, 'store'])->name('profesores.store');
Route::post('/dashboard/profesores/{id}', [ProfesoresController::class, 'update'])->name('profesores.update');
Route::delete('/dashboard/profesores/{id}', [ProfesoresController::class, 'destroy'])->name('profesores.destroy');

// Actividades
Route::get('/dashboard/actividades', function (){
    $actividades = DB::table('actividades')->get();
    $escuelas = DB::table('escuelas')->get();
    $profesores = DB::table('profesores')->get();
    return view('admin.actividades.admin_actividades', compact('actividades', 'escuelas', 'profesores'));
})->name('actividades');
Route::post('/dashboard/actividades', [ActividadesController::class, 'store'])->name('actividades.store');
Route::post('/dashboard/actividades/{id}', [ActividadesController::class, 'update'])->name('actividades.update');
Route::delete('/dashboard/actividades/{id}', [ActividadesController::class, 'destroy'])->name('actividades.destroy');

// Carrousel
Route::get('image-carrousel', 'ImageCarrouselController@index');
Route::post('image-carrousel', [ImageCarrouselController::class, 'upload']);
Route::delete('image-carrousel/{id}', [ImageCarrouselController::class, 'destroy']);

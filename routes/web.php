<?php

use App\Http\Controllers\PersonasController;
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
    return view('admin');
})->name('admin');

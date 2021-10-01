<?php

use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;
use Illuminate\support\Facades\View;

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

Route::get('/', function(){
    return view('auth.login');
});

/* Route::middleware(['auth:sanctum', 'verified'])->get('/dash', function () {
    return view('dash.index');
})->name('dash'); */

Route::resource('activos', 'App\Http\Controllers\ActivoController');

Route::resource('tipo-activos', 'App\Http\Controllers\TipoActivoController');

Route::resource('receptores', 'App\Http\Controllers\ReceptorController');

Route::resource('entregas', 'App\Http\Controllers\EntregaController');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\administracion;
use App\Http\Controllers\cliente\canino;
use App\Http\Controllers\cliente\felino;

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

Route::get('/', [administracion::class, 'index']);
//Route::get('ini',[administracion::class, 'somo']);
route::get('/ini', function(){
    return view('ini.somos');
});

Route::get('/PERROS', [canino::class,'dog']);


route::get('/Gatos', [felino::class,'felix']);
Route::get('/qjr', [administracion::class, 'recla']);


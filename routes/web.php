<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

use App\Http\Controllers\TriagemController;

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
    return view('welcome');
});

Route::get('/setores',[TriagemController::class,'index'])->name('setores');
Route::get('/senha/{array?}',[TriagemController::class,'senha'])->name('senha');

//Route::resource('/unidades',TriagemController::class);
//Route::get('/triagem',[TriagemController::class,'index'])->name('triagem');
//Route::get('/unidades','App\Http\Controllers\TriagemController@unidades')->name('triagem.unidades');

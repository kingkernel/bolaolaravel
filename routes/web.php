<?php

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
    return view('bolao.indexoff');
});
Route::get('cadastro/', [App\Http\Controllers\usuariosController::class, 'cadastro']);
Route::post('usuariosCadastro/',[App\Http\Controllers\usuariosController::class, 'usuariosCadastro']);

Route::get('ajaxestados/',[App\Http\Controllers\freeajaxController::class, 'estados']);
Route::get('ajaxcidades/{sigla}', function($sigla){
    return \App\Http\Controllers\freeajaxController::cidades($sigla);
});
Route::get('valida/{hash}', function($hash){
    return \App\Http\Controllers\validationController::mailValidation($hash);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/test", [App\Http\Controllers\testController::class, 'index']);

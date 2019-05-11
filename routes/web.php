<?php

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
use App\Usuario;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::post('logeo', 'loginController@login')->name('logeo');

Route::get('index', function () {
    return view('index');
})->name('index');

Route::get('registrar', function (){
    return view('registrar');
    
})->name('registrar');

Route::post('guardar', [  
    'uses'=> 'usuarioController@store',
    'as'=> 'guardar',
    'name'=> 'guardar'
]);

Route::get('modificar', function (){
    $usuario = Usuario::all();
    return view('editar',['goods'=>$usuario]);
    
})->name('modificar');

Route::get('mod/{id}','usuarioController@buscar')->name('mod/');
Route::post('mod_reg/{id}','usuarioController@editar')->name('mod_reg');

Route::get('eliminar', function (){
    $usuario = Usuario::all();
    return view('eliminar',['goods'=>$usuario]);
    
})->name('eliminar');

Route::delete('/eliminar/{id}','usuarioController@eliminar')->name('eliminar_r');
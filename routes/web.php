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
});

Route::post('/logeo', 'loginController@login');

Route::get('/index', function () {
    return view('index');
});

Route::get('/registrar', function (){
    return view('registrar');
    
});
Route::post('/guardar', [  
    'uses'=> 'usuarioController@store',
    'as'=> 'guardar'
]);

Route::get('/modificar', function (){
    $usuario = Usuario::all();
    return view('editar',['goods'=>$usuario]);
    
});
Route::get('/mod/{id}','usuarioController@buscar');
Route::post('/mod_reg/{id}','usuarioController@editar');

Route::get('/eliminar', function (){
    $usuario = Usuario::all();
    return view('eliminar',['goods'=>$usuario]);
    
});

Route::delete('/eliminar/{id}','usuarioController@eliminar');
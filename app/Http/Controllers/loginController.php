<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use Alert;
class loginController extends BaseController
{
    public function login (Request $req)
    {
        $usuario = $req->input('user');
        $pass = $req->input('pass');
        
        $login = DB::table('users')->where(['name'=>$usuario,'password'=>$pass])->get();
        if(count($login) > 0){
        alert()->success('Ingreso Exitoso');
          return redirect('/index');
        }
        else {
        alert()->error('Por favor intente nuevamente', 'Usuario y/o Contraseña Incorrecto');    
            return redirect('/');
        }
    }
    
}

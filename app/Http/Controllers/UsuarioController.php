<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use Alert;
use App\Usuario;
class UsuarioController extends BaseController
{
    public function store (Request $request)
    {
        $name = $request['name'];
        $description = $request['descripcion'];
        $value = $request['valor'];
        
        $usuario = new usuario();
        
        $usuario->name = $name;
        $usuario->description = $description;
        $usuario->value = $value;
        
        $usuario->save();
        alert()->success('Registro guardado con exito');
          return redirect('/registrar');
    }
    
    public function buscar ($id){
        $usuario = Usuario::where('id',$id)->first();
        return view('/mod_reg',['goods'=>$usuario]);
    }
    
    public function editar (Request $request,$id){
        $nuevoname = $request->input('nombre');
        $nuevadescription = $request->input('description');
        $nuevovalue = $request->input('valor');
        
        $usuario = Usuario::find($id);
        
        $usuario->name=$nuevoname;
        $usuario->description=$nuevadescription;
        $usuario->value=$nuevovalue;
        $usuario->save();
        
        alert()->success('Registro actualizado con exito');
          return redirect('/modificar');
        
    }
    
    public function eliminar ($id){
        Usuario::destroy($id);
        alert()->success('Registro borrado con exito');
        return back();
    }
    
}

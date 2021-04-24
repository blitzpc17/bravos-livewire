<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\estadoViaje;

class EstadoViajeController extends Controller
{
    public function index(){
       // $data = estadoViaje::all();
        return view('backend.modulos.estadoviaje'/*, compact('data')*/);
    }

    public function createEdo(Request $request){
        try{  
           
            //insert
            $edo =new estadoViaje();
            $edo->clave=$request->addClave;
            $edo->nombre=$request->addNombre;
            $edo->save();

            //response
            return response()->json(["error"=>0, "back"=>"ok", "client"=>"Registro guardado correctamente."]);
        }catch(Exception $ex){
            return response()->json(["error"=>1, "back"=>$ex, "client"=>"Error en la operacion."]);
        }
    }

    public function modifEdo(Request $request){
        try{

            $result = estadoViaje::where('clave', $request->mdClave)
            ->update(['nombre' => $request->mdNombre]);
            if($result>0){
                //response
                return response()->json(["error"=>0, "back"=>$result, "client"=>"Registro guardado correctamente."]);
            }else{
                //response
            return response()->json(["error"=>1, "back"=>$result, "client"=>"No se encontraron coincidencias para modificar el registro."]);
            }

        }catch(Exception $ex){
            return response()->json(["error"=>"", "back"=>$ex, "client"=>"Error en la operacion."]);
        }
    }

    public function DeleteEdo($id){
        try{
            $deletedRows = estadoViaje::where('id', $id)->delete();
            if($deletedRows>0){
                //response
                return response()->json(["error"=>0, "back"=>$deletedRows, "client"=>"Registro eliminado correctamente."]);
            }else{
                //response
                return response()->json(["error"=>1, "back"=>$deletedRows, "client"=>"No se encontraron coincidencias para eliminar el registro."]);
            }
        }catch(Exception $ex){
            return response()->json(["error"=>"", "back"=>$ex, "client"=>"Error al tratar de eliminar el registro."]);
        }
    }

    public function ObtenerEdo($id){
        try{
            return estadoViaje::where('id', $id)->first();
        }catch(Exception $ex){
            return response()->json(["error"=>"", "back"=>$ex, "client"=>"Error al consultar registro."]);
        }
    }

    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camionero;

class CamioneroController extends Controller
{
    public function index(){    //GET api/coche
        return response()->json(Camionero::all(), 200);
    }

    
    //public function create(){
        //
    //}

  
    public function store(Request $request){ //POST api/coche + datos JSON
        try{
             $objeto = Camionero::create($request->all());
             return response()->json(["id"=>$objeto->id], 201);
        }catch(\Exception $e){
            return response()->json(["id"=>0], 200);
        }
    }

    
    public function show($id){ //GET api/coche/id
        $camionero = Camionero::find($id);
        if($camionero !=null){
            $paquetes = $camionero->paquetes;
        }
        return response()->json($camionero, 200);
    }

    
    //public function edit($id){
        //
    //}

    
    public function update(Request $request, $id){ //PUT api/coche/id
        try{
            $camionero = Camionero::find($id);
            $resultado = $camionero->update($request->all());
            return response()->json(["resultado"=>$resultado], 200);
            
        }catch(\Exception $e){
            return response()->json(["resultado"=>false], 200);
        }
    }

    
    public function destroy($id){ //DELETE api/coche/id
    
        try{
            $resultado = Camionero::destroy($id);
        }catch(\Exception $e){
            $resultado = -1;
        }
        return response()->json(["resultado"=>$resultado], 200);  
        
        // try{
        //     $coche = Coche::find($id);
        //     if($coche != null){
        //         $resultado = $coche->delete();
        //         return response()->json(["resultado"=>$resultado], 200);    
        //     }
            
        // }catch(\Exception $e){
                
        // }
        // return response()->json(["resultado"=>false], 200);
    }
}

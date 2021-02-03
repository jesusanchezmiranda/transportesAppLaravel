<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paquete;

class PaqueteControler extends Controller
{
     public function index()
    {
        return response()->json(Paquete::all(), 200);
    }

    
    //public function create(){
        //
    //}

    
    public function store(Request $request)
    {
        try{
             $objeto = Paquete::create($request->all());
             return response()->json(["id"=>$objeto->id], 201);
        }catch(\Exception $e){
            return response()->json(["id"=>0], 200);
        }
    }

    
    public function show($id)
    {
        $paquete = Paquete::find($id);
        if($paquete !=null){
            $paquetes = $paquete->camionero;
        }
        return response()->json($paquete, 200);
    }

    
    //public function edit($id){
        //
    //}

    
    public function update(Request $request, $id)
    {
        try{
            $paquete = Paquete::find($id);
            $resultado = $paquete->update($request->all());
            return response()->json(["resultado"=>$resultado], 200);
            
        }catch(\Exception $e){
            return response()->json(["resultado"=>false], 200);
        }
    }

    
    public function destroy($id)
    {
        try{
            $resultado = Paquete::destroy($id);
        }catch(\Exception $e){
            $resultado = -1;
        }
        return response()->json(["resultado"=>$resultado], 200);  
    }
}

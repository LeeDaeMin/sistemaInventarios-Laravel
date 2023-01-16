<?php

namespace App\Http\Controllers;

use App\Models\Historiales;
use App\Http\Requests\StoreHistorialesRequest;
use App\Http\Requests\UpdateHistorialesRequest;

class HistorialesController extends Controller
{
    // see all Historiales
    public function index(){
        try{
            $request = Historiales::all();
            return request()->json($request);
        } catch(\Exception $e){
            return response()->json(['Error' => $e->getMessage()], 500);
        }
    }

    // see one Historial
    public function show($id){
        try{
            $request = Historiales::find($id);
            return response()->json($request);
        } catch(\Exception $e){
            return response()->json(['Error' => $e->getMessage()], 500);
        }
    }

    // create Historiales
    public function create(Request $request){
        try{
            $historiales->validate([
                'cantidad'=> 'required|string'
            ]);
            $historiales = Historiales::create([
                'cantidad' => $historiales -> cantidad
            ]);
            return response()->json($historiales);
        } catch(\Exception $e){
            return response()->json(['Error' => $e->getMessage()], 500);
        }

        return response()->json(['OK' => "Historia Creada Exitosamente"]);
    }

    // update Historiales
    public function update(Request $request, $id){
        try{
            $request->validate([
                'cantidad'=> 'required|string'
            ]);
            $historial = Historiales::find($id);
            $historial->update($request->all());
            return response()->json([
                'message'=> 'Historial Actualizado Exitosamente',
                'historial' => $historial

            ]);
        } catch(\Exception $e){
            return response()->json(['Error' => $e->getMessage()], 500);
        }

    }
    //delete Historiales

    public function delete($id){
        try{
            $request = Historiales::find($id);
            $request->delete();
            return response()->json($request);
        } catch(\Exception $e){
            return response()->json(['Error' => $e->getMessage()], 500);
        }

        return response()->json(['OK' => "Historia Borrada Exitosamente"]);
    }
}

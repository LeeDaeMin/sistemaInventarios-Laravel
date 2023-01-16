<?php

namespace App\Http\Controllers;

use App\Models\Bodegas;
use App\Http\Requests\StoreBodegasRequest;
use App\Http\Requests\UpdateBodegasRequest;

class BodegasController extends Controller
{
    // see all Bodegas
    public function index(){
        try{
            $request = Bodegas::all();
            return response()->json($request);
        } catch(\Exception $e){
            return response()->json(['Error'=> $e->getMessaege()], 500);
        }
    }

    // see one Bodega
    public function show($id){
        try{
            $request = Bodega::find($id);
            return response()->json($request);
        }catch(\Exception $e){
            return response()->json(['Error'=> $e->getMessaege()], 500);
        }
    }

    // create Bodega
    public function create(Request $bodega){
        try{
            $bodega->validate([
                'nombre'=>'required|string'
            ]);
            $request = Bodega::create([
                'nombre' => $bodega -> nombre
            ]);
        } catch(\Exception $e){
            return response()->json(['Error'=> $e->getMessaege()], 500);
        }
    }

    // update Bodega
    public function update(Request $bodega, $id){
        try{
            $bodega->validate([
                'nombre'=>'required|string'
            ]);
            $request = Bodega::find($id);
            $request->update($request->all());
            return response()->json([
                'message' => 'Bodega actualizado correctamente'
            ]);
        } catch(\Exception $e){
            return response()->json(['Error'=> $e->getMessaege()], 500);
        }
    }

    // Delete Bodega
    public function delete($id){
        try{
            $request = Bodega::find($id);
            $request->delete();
            return response()->json($request);
        }  catch(\Exception $e){
            return response()->json(['Error'=> $e->getMessaege()], 500);
        }

        return response()->json(['Ok' => 'Bodega eliminada Correctamente'], 200);
    }
}

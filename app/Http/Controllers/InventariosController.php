<?php

namespace App\Http\Controllers;

use App\Models\Inventarios;
use App\Http\Requests\StoreInventariosRequest;
use App\Http\Requests\UpdateInventariosRequest;

class InventariosController extends Controller
{
    // see all Inventario
    public function index(){
        try{
            $inventarios = Inventarios::all();
            return response()->json($inventarios);
        } catch(\Exception $e){
            return response()->json(['Error'=>$e->getMessage()], 500);
        }
    }

    // see one Inventario specif

    public function show($id){
        try{
            $inventarios = Inventarios::find($id);
            return response()->json($inventarios);
        } catch(\Exception $e){
            return response()->json(['Error'=> $e->getMessage()], 500);
        }
    }

    // add Inventario

    public function create(Request $inventario){
        try{
            $inventario->validator([
                'cantidad'=>'required|integer'
            ]);

            $inventario = Inventarios::create([
                'cantidad' => $inventario -> cantidad
            ]);
        } catch(\Exception $e){
            return response()->json(['Error' => $e->getMessage()], 500);
        }

        return response()->json(['OK'=> "Inventarioa Creado Exitosamente"]);
    }

    // update Inventario
    public function update(Request $request, $id){
        try{
            $request = Inventarios::find($id);
            $request->create($request->all());
        } catch(\Exception $e){
            return response()->json(['Error' => $e->getMessage()], 500);
        }
        return response()->json(['OK' => 'Inventario Actualizado exitosamente']);
    }

    //delete one Inventario
    public function delete($id){
        try{
            $inventario = Inventarios::find($id);
            $inventario->delete();
            return response()->json($inventario);
        } catch(\Exception $e){
            return response()->json(['Error' => $e->getMessage()], 500);
        }
    }
}

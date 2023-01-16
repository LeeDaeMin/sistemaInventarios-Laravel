<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use App\Http\Requests\StoreProductosRequest;
use App\Http\Requests\UpdateProductosRequest;

class ProductosController extends Controller
{
   // see all Products

   public function index(){
        try{
            $producto = Productos::all();
            return response()->json($producto);
        } catch(\Exception $e){
            return response()->json(['Erro' => $e->getMessage()], 500);
        }
   }

   // see one Product

   public function show(){
        try{
            $request = Productos::find();
            return response()->json($request);
        } catch(\Exeception $e){
            return response()->json(['Error' => $e->getMessage], 500);
        }
   }

   // Create Product
   public function create(Request $productos){
        try{
            $productos->validate([
                'nombre'=>'required|string|max:20',
                'descripcion' => 'required|string|max:255',
                'estado' => 'required|integer'
            ]);
            $productos = Productos::create([
                'nombre' => $productos -> nombre,
                'descripcion' => $productos -> descripcion,
                'estado' => $productos -> estado
            ]);
        } catch(\Exception $e){
            return response()->json(['Error' => $e->getMessage()], 500);
        }

        return response()->json(['Ok' => 'Usuario Creado correctamente'], 200);
   }

   //Update Product

   public function update(Request $request, $id){
        try{
            $request->validate([
                'nombre'=>'required|string|max:20',
                'descripcion' => 'required|string|max:255',
                'estado' => 'required|integer'
            ]);
            $productos = Productos::find($id);
            $productos->update($request->all());
            return response->json([
                'message' => 'Producto Actualizado Exitosamente',
                'productos' => $productos
            ]);
        } catch(\Exception $e){
            return response()->json(['Error' => $e->getMessage()], 500);
        }
   }

   //Delete Product

   public function delete($id){
        try{
            $producto = Productos::find($id);
            $producto->delete();
            return response()->json($producto);
        }catch(\Exception $e){
            return response()->json(['Error' => $e->getMessage()], 500);
        }
        return response()->json(['Ok' => 'Usuario eliminado correctamente'], 200);
   }

}

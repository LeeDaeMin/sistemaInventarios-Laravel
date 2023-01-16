<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use App\Http\Requests\StoreUsuariosRequest;
use App\Http\Requests\UpdateUsuariosRequest;

class UsuariosController extends Controller
{

    // see all users

    public function index()
    {
        try{
            $usuarios = Usuario::all();
            return response()->json($usuarios);
        } catch(\Exception $e){
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    // see one user

    public function show()
    {
        try{
            $usuario = Usuario::find($id);
            return response()->json($usuario);
        } catch(\Exception $e){
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    // create user

    public function create(Request $usuarios)
    {
        try{
            $usuarios->validate([
                'nombre' => 'required|string|max:20',
                'fotos' => 'required|string',
                'estado' => 'required|integer',
            ]);
            $usuarios = Usuarios::create([
                'nombre' => $usuarios->nombre,
                'fotos' => $usuarios->fotos,
                'estado' => $usuarios->estado,
            ]);
            } catch(\Exception $e){
                return response()->json(['error' => $e->getMessage()], 500);
            }
    }

    // update user

    public function update(Request $request, $id){
        try{
            $request->validate([
                'nombre' => 'required|string',
                'fotos' => 'required|string',
                'estado' => 'required|integer',
            ]);
            $usuario = Usuarios::find($id);
            $usuario->update($request->all());
            return response()->json([
                'message' => 'Usuario actualizado correctamente',
                'usuario' => $usuario
            ]);
        } catch(\Execption $e){
            return response()->json(['Error' => $e->getMessage()], 500);
        }
    }

    // delete user
    public function delete($id){
        try{
            $usuario = Usarios::find($id);
            $usuario->delete();
            return response()->json($usuario);
        } catch(\Exception $e){
            return responde()->json(['Error' => $e->getMessage()], 500);
        }
        return response()->json(['Ok' => 'Usuario eliminado correctamente'], 200);
    }
}

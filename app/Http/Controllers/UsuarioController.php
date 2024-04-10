<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return response()->json($usuarios, 200);
    }

    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->nombre = $request->nombre;
        $usuario->clave = $request->clave;
        $usuario->email_usuario = $request->email_usuario;
        $usuario->telefono = $request->telefono;
        $usuario->tipo_usuario = $request->tipo_usuario;
        $usuario->save();

        return response()->json($usuario, 201);
    }

    public function show($id)
    {
        $usuario = Usuario::find($id);
        if (!$usuario) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }
        return response()->json($usuario, 200);
    }

    public function update(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        if (!$usuario) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }

        $usuario->nombre = $request->nombre;
        $usuario->clave = $request->clave;
        $usuario->email_usuario = $request->email_usuario;
        $usuario->telefono = $request->telefono;
        $usuario->tipo_usuario = $request->tipo_usuario;
        $usuario->save();

        return response()->json($usuario, 200);
    }

    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        if (!$usuario) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }

        $usuario->delete();
        return response()->json(['message' => 'Usuario eliminado correctamente'], 200);
    }
}
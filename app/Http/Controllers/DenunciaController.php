<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DenunciaController extends Controller
{
    public function index()
    {
        $denuncias = Denuncia::all();
        return response()->json($denuncias, 200);
    }

    public function store(Request $request)
    {
        $denuncia = new Denuncia();
        $denuncia->id_usuario = $request->id_usuario;
        $denuncia->Tipo = $request->Tipo;
        $denuncia->Sescripcion = $request->Sescripcion;
        $denuncia->Momento = $request->Momento;
        $denuncia->Estado = $request->Estado;
        $denuncia->Latitud = $request->Latitud;
        $denuncia->Longitud = $request->Longitud;
        $denuncia->save();

        return response()->json($denuncia, 201);
    }

    public function show($id)
    {
        $denuncia = Denuncia::find($id);
        if (!$denuncia) {
            return response()->json(['message' => 'Denuncia no encontrada'], 404);
        }
        return response()->json($denuncia, 200);
    }

    public function update(Request $request, $id)
    {
        $denuncia = Denuncia::find($id);
        if (!$denuncia) {
            return response()->json(['message' => 'Denuncia no encontrada'], 404);
        }

        $denuncia->id_usuario = $request->id_usuario;
        $denuncia->Tipo = $request->Tipo;
        $denuncia->Sescripcion = $request->Sescripcion;
        $denuncia->Momento = $request->Momento;
        $denuncia->Estado = $request->Estado;
        $denuncia->Latitud = $request->Latitud;
        $denuncia->Longitud = $request->Longitud;
        $denuncia->save();

        return response()->json($denuncia, 200);
    }

    public function destroy($id)
    {
        $denuncia = Denuncia::find($id);
        if (!$denuncia) {
            return response()->json(['message' => 'Denuncia no encontrada'], 404);
        }

        $denuncia->delete();
        return response()->json(['message' => 'Denuncia eliminada correctamente'], 200);
    }
}
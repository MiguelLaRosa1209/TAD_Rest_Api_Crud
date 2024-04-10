<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeguimientoController extends Controller
{
    public function index()
    {
        $seguimientos = Seguimiento::all();
        return response()->json($seguimientos, 200);
    }

    public function store(Request $request)
    {
        $seguimiento = new Seguimiento();
        $seguimiento->id_Denuncia = $request->id_Denuncia;
        $seguimiento->Estado = $request->Estado;
        $seguimiento->Notas = $request->Notas;
        $seguimiento->Hora_seg = $request->Hora_seg;
        $seguimiento->save();

        return response()->json($seguimiento, 201);
    }

    public function show($id)
    {
        $seguimiento = Seguimiento::find($id);
        if (!$seguimiento) {
            return response()->json(['message' => 'Seguimiento no encontrado'], 404);
        }
        return response()->json($seguimiento, 200);
    }

    public function update(Request $request, $id)
    {
        $seguimiento = Seguimiento::find($id);
        if (!$seguimiento) {
            return response()->json(['message' => 'Seguimiento no encontrado'], 404);
        }

        $seguimiento->id_Denuncia = $request->id_Denuncia;
        $seguimiento->Estado = $request->Estado;
        $seguimiento->Notas = $request->Notas;
        $seguimiento->Hora_seg = $request->Hora_seg;
        $seguimiento->save();

        return response()->json($seguimiento, 200);
    }

    public function destroy($id)
    {
        $seguimiento = Seguimiento::find($id);
        if (!$seguimiento) {
            return response()->json(['message' => 'Seguimiento no encontrado'], 404);
        }

        $seguimiento->delete();
        return response()->json(['message' => 'Seguimiento eliminado correctamente'], 200);
    }
}
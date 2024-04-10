<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlertaController extends Controller
{
    public function index()
    {
        $alertas = Alerta::all();
        return response()->json($alertas, 200);
    }

    public function store(Request $request)
    {
        $alerta = new Alerta();
        $alerta->id_zona = $request->id_zona;
        $alerta->tipo_alerta = $request->tipo_alerta;
        $alerta->id_Denuncia = $request->id_Denuncia;
        $alerta->save();

        return response()->json($alerta, 201);
    }

    public function show($id)
    {
        $alerta = Alerta::find($id);
        if (!$alerta) {
            return response()->json(['message' => 'Alerta no encontrada'], 404);
        }
        return response()->json($alerta, 200);
    }

    public function update(Request $request, $id)
    {
        $alerta = Alerta::find($id);
        if (!$alerta) {
            return response()->json(['message' => 'Alerta no encontrada'], 404);
        }

        $alerta->id_zona = $request->id_zona;
        $alerta->tipo_alerta = $request->tipo_alerta;
        $alerta->id_Denuncia = $request->id_Denuncia;
        $alerta->save();

        return response()->json($alerta, 200);
    }

    public function destroy($id)
    {
        $alerta = Alerta::find($id);
        if (!$alerta) {
            return response()->json(['message' => 'Alerta no encontrada'], 404);
        }

        $alerta->delete();
        return response()->json(['message' => 'Alerta eliminada correctamente'], 200);
    }
}

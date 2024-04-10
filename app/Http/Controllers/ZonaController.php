<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZonaController extends Controller
{
    public function index()
    {
        $zonas = Zona::all();
        return response()->json($zonas, 200);
    }

    public function store(Request $request)
    {
        $zona = new Zona();
        $zona->nombre = $request->nombre;
        $zona->seguridad = $request->seguridad;
        $zona->Latitud_menor = $request->Latitud_menor;
        $zona->Latitud_mayor = $request->Latitud_mayor;
        $zona->Longitud_menor = $request->Longitud_menor;
        $zona->Longitud_mayor = $request->Longitud_mayor;
        $zona->save();

        return response()->json($zona, 201);
    }

    public function show($id)
    {
        $zona = Zona::find($id);
        if (!$zona) {
            return response()->json(['message' => 'Zona no encontrada'], 404);
        }
        return response()->json($zona, 200);
    }

    public function update(Request $request, $id)
    {
        $zona = Zona::find($id);
        if (!$zona) {
            return response()->json(['message' => 'Zona no encontrada'], 404);
        }

        $zona->nombre = $request->nombre;
        $zona->seguridad = $request->seguridad;
        $zona->Latitud_menor = $request->Latitud_menor;
        $zona->Latitud_mayor = $request->Latitud_mayor;
        $zona->Longitud_menor = $request->Longitud_menor;
        $zona->Longitud_mayor = $request->Longitud_mayor;
        $zona->save();

        return response()->json($zona, 200);
    }

    public function destroy($id)
    {
        $zona = Zona::find($id);
        if (!$zona) {
            return response()->json(['message' => 'Zona no encontrada'], 404);
        }

        $zona->delete();
        return response()->json(['message' => 'Zona eliminada correctamente'], 200);
    }
}

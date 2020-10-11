<?php

namespace App\Http\Controllers;

use App\Models\Produccion;
use Illuminate\Http\Request;

class ProduccionController extends Controller
{
    public function index()
    {
        $produccion = Produccion::all();
        if (count($produccion) > 0) {
            return response()->json(['status' => ' OK', 'data' => $produccion, 'Mensaje' => 'Registro de produccion'], 200);
        } else {
            return response()->json(['status' => ' OK', 'data' => array(), 'Mensaje' => 'Sin Registro de produccion'], 200);
        }
    }

    public function getProduccion($id_produccion)
    {
        $produccion = Produccion::find($id_produccion);

        if ($produccion) {
            return response()->json(['status' => ' OK', 'data' => $produccion, 'Mensaje' => 'Registro de produccion'], 200);
        } else {
            return response()->json(['status' => ' OK', 'data' => array(), 'Mensaje' => 'No hay Registro de produccion'], 200);
        }
    }
    public function createProduccion(Request $request)
    {
        $produccion = new Produccion;
        $produccion->id_produccion = $request->id_produccion;
        $produccion->nom_producto = $request->nom_producto;
        $produccion->fec_produccion = $request->fec_produccion;
        $produccion->cant_produccion = $request->cant_produccion;
        $produccion->save();
        if ($produccion) {
            return response()->json(['status' => ' OK', 'data' => $produccion, 'Mensaje' => 'Registro de produccion guardado'], 200);
        } else {
            return response()->json(['status' => ' OK', 'data' => array(), 'Mensaje' => 'No se Registro de produccion'], 200);
        }
    }

    public function updateProduccion(Request $request, $id_produccion)
    {

        $produccion = Produccion::find($id_produccion);
        $produccion->id_produccion = $request->id_produccion;
        $produccion->nom_producto = $request->nom_producto;
        $produccion->fec_produccion = $request->fec_produccion;
        $produccion->cant_produccion = $request->cant_produccion;
        $produccion->save();
        if ($produccion) {
            return response()->json(['status' => ' OK', 'data' => $produccion, 'Mensaje' => 'La produccion se actualizo con guardado'], 200);
        } else {
            return response()->json(['status' => ' OK', 'data' => array(), 'Mensaje' => 'No se Actualizo la produccion'], 200);
        }
    }

    public function deleteProduccion($id_produccion){
        $produccion = Produccion::find($id_produccion);
        $produccion->delete();
        if ($produccion) {
            return response()->json(['status' => ' OK', 'data' => $produccion, 'Mensaje' => 'La produccion se borro con guardado'], 200);
        } else {
            return response()->json(['status' => ' OK', 'data' => array(), 'Mensaje' => 'No se borro la produccion'], 200);
        }
    }
}

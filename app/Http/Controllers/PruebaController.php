<?php

namespace App\Http\Controllers;

use App\Models\Prueba;
use Illuminate\Http\Request;

class PruebaController extends Controller
{

    /**
* @OA\Get(
*     path="/api/prueba",
*     summary="Prueba index",
*     @OA\Response(response="200", description="Success"),
* )
*/
    public function index()
    {
        $datos = Prueba::all();
        return response()->json($datos);
    }

    public function store(Request $request)
    {
        $datos = Prueba::create($request->all());
        return response()->json($datos, 201);
    }

    public function show($id)
    {
        $datos = Prueba::findOrFail($id);
        return response()->json($datos);
    }

    public function update(Request $request, $id)
    {
        $datos = Prueba::findOrFail($id);
        $datos->update($request->all());
        return response()->json($datos, 200);
    }

    public function destroy($id)
    {
        Prueba::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
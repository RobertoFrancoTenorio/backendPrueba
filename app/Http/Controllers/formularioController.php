<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\formulario;

class formularioController extends Controller
{
    public function index()
    {
        /*Desplegara la lista de todos los registros*/
        return formulario::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*Registra en la base de datos */
        return formulario::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return formulario::show($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(formulario::where('id', $id)->exists()){
            $formulario = formulario::find($id);
            $formulario->nombre = $request->nombre;
            $formulario->edad = $request->edad;
            $formulario->fecha_nacimiento = $request->fecha_nacimiento;
            $formulario->fecha_inscripcion = $request->fecha_inscripcion;
            $formulario->costo = $request->costo;

            $formulario->save();
            return response()->json([
                "message" => "Record updated successfully"
            ], 202);
        }
        else{
            return response()->json([
                'message' => "formulario not found"
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(formulario::where('id', $id)->exists()){
            $formulario = formulario::find($id);

            $formulario->delete();
            return response()->json([
                "message" => "Record deleted successfully"
            ], 202);
        }
        else{
            return response()->json([
                'message' => "formulario not found"
            ], 404);
        }
    }
}

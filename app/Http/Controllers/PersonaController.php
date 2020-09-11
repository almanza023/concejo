<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partido;
use App\Cargos;
use App\Persona;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas=Persona::all();
        $cargos=Cargos::where('estado', 1)->get();
        $partidos=Partido::where('estado', 1)->get();

        if (request()->ajax()) {
            $personas = Persona::all();
            /*si los campos estan vacios mostrar mj de error, sino retornar vista. */
            if (count($personas) == 0) {
                return response()->json(['warning' => 'Error en el servidor']);
            } else {
                return response()->view('tablas.tb-personas', compact('personas'));
            }
        }
        return view('personas.index', compact('personas', 'cargos', 'partidos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $exito= Persona::create($request->all());
        if($exito){
            return response()->json(['success' => 'PERSONA CREADA CON EXITO!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        if (request()->ajax()) {
            $exito=Persona::findOrFail($request->id)->update($request->all());
            if($exito){
                return response()->json(['success' => 'PERSONA ACTUALIZADA CORRECTAMENTE']);
            }
            
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
        //
    }
    public function change($id)
    {
        $persona = Persona::findOrFail($id);

        if ($persona->estado==1) {
            $persona->update(['estado' => 0]);
        } else {
            $persona->update(['estado' => 1]);
        }
        return response()->json(['success' => 'ESTADO DE PERSONA ACTUALIZADO CON EXITO!']);
    }
}

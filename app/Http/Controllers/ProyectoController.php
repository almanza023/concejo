<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partido;
use App\Cargos;
use App\Persona;
use App\Proyecto;
use App\TipoVotacion;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos=Proyecto::all();
        $personas=Persona::where('estado', 1)->get();
        $tipos=TipoVotacion::where('estado', 1)->get();

        if (request()->ajax()) {
            $personas = Persona::all();
            /*si los campos estan vacios mostrar mj de error, sino retornar vista. */
            if (count($personas) == 0) {
                //return response()->json(['warning' => 'Error en el servidor']);
            } else {
                return response()->view('tablas.tb-proyectos', compact('proyectos', 'tipos'));
            }
        }
        return view('proyectos.index', compact('proyectos', 'personas', 'tipos'));

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
        $proyecto = new Proyecto();
        $proyecto->nombre=$request->nombre;
        $proyecto->descripcion=$request->descripcion;
        $proyecto->anexos=$request->anexos;
        $proyecto->persona_id=1;
        $proyecto->save();
        if($proyecto){
            return response()->json(['success' => 'PROYECTO CREADO CON EXITO!']);
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
            $proyecto=Proyecto::find($request->id);
            $proyecto->nombre=$request->nombre;
            $proyecto->descripcion=$request->descripcion;
            $proyecto->anexos=$request->anexos;
            $proyecto->persona_id=1;
            $proyecto->save();
            $exito=Proyecto::findOrFail($request->id)->update($request->all());
            if($exito){
                return response()->json(['success' => 'PROYECTO ACTUALIZADA CORRECTAMENTE']);
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
        $proyecto = Proyecto::findOrFail($id);

        if ($proyecto->estado==1) {
            $proyecto->update(['estado' => 0]);
        } else {
            $proyecto->update(['estado' => 1]);
        }
        return response()->json(['success' => 'ESTADO DE PROYECTO ACTUALIZADO CON EXITO!']);
    }
}

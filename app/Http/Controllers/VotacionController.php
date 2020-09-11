<?php

namespace App\Http\Controllers;

use App\ProyectoVotacion;
use App\Votacion;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VotacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()

    {
        $date=Carbon::now()->format('Y-m-d');

        $votaciones=ProyectoVotacion::where('estado_id', '1')
        ->where('fecha', $date)->get();
        $cantidad=count($votaciones);
        return view('votaciones.index', compact('votaciones', 'cantidad'));



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
        $date=Carbon::now()->format('Y-m-d');
        $hour=Carbon::now()->format('h:i:s');
        $votacion=new Votacion();
        $votacion->proyecto_id=$request->proyecto_id;
        $votacion->persona_id=auth()->user()->persona_id;
        $votacion->respuesta=$request->respuesta;
        $votacion->fecha=$date;
        $votacion->hora=$hour;
        $votacion->observaciones=$request->observaciones;
        $votacion->save();
        return response()->json(['success' => 'VOTO REGISTRADO CON EXITO']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $date=Carbon::now()->format('Y-m-d');
        $votaciones=ProyectoVotacion::where('id',$id)->get();
        $cantidad=count($votaciones);

        return view('votaciones.show', compact('votaciones', 'cantidad'));
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
        //
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
}

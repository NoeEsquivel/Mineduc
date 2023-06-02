<?php

namespace App\Http\Controllers;

use App\Models\Buscador;
use Illuminate\Http\Request;

class BuscadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexb(Request $request)
    {
        //Sirve para guardar datos en la base de datos
//        $alumnos = new Buscador();
//        $alumnos->nombre = $request->post('nombre');
//        $alumnos->apellido = $request->post('apellido');
//        $alumnos->no_carnet = $request->post('no_carnet');
//        $alumnos->cui = $request->post('cui');
//        $alumnos->fecha_nacimiento = $request->post('fecha_nacimiento');
//        $alumnos->grado = $request->post('grado');
//        $alumnos->save();

//        return redirect()->route("indexb")->with("success", "Agregado con exito!");

        return view('layout/busca');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buscador  $buscador
     * @return \Illuminate\Http\Response
     */
    public function show(Buscador $buscador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buscador  $buscador
     * @return \Illuminate\Http\Response
     */
    public function edit(Buscador $buscador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buscador  $buscador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buscador $buscador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buscador  $buscador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buscador $buscador)
    {
        //
    }
}

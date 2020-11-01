<?php

namespace PACOS\Http\Controllers;

use Illuminate\Http\Request;
use PACOS\Leadsusuarios;


class LeadsusuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['leads']=Leadsusuarios::paginate();
        return view('leads.index', $datos);
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
        //$datosLeads=request()->all();

        $datosLeads=request()->except('_token');
        Leadsusuarios::insert($datosLeads);

        //return response()->json($datosLeads);

        return redirect('/')->with('message','¡Te has suscrito, espera las mejores soluciones!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \PACOS\Leadsusuarios  $leadsusuarios
     * @return \Illuminate\Http\Response
     */
    public function show(Leadsusuarios $leadsusuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \PACOS\Leadsusuarios  $leadsusuarios
     * @return \Illuminate\Http\Response
     */
    public function edit(Leadsusuarios $leadsusuarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \PACOS\Leadsusuarios  $leadsusuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Leadsusuarios $leadsusuarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \PACOS\Leadsusuarios  $leadsusuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leadsusuarios $leadsusuarios)
    {
        //
    }
}

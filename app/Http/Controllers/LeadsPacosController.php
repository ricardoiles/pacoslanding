<?php

namespace PACOS\Http\Controllers;

use Illuminate\Http\Request;
use PACOS\LeadsPacos;

class LeadsPacosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['leadsPACOS']=LeadsPacos::paginate();
        return view('leadsPACOS.index', $datos);
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
        //$datosLeads=request()->all();

        $datosLeads=request()->except('_token');
        LeadsPacos::insert($datosLeads);

        //return response()->json($datosLeads);

        return redirect('/tengounPACOS')->with('message','¡Te has suscrito, espera las mejores soluciones!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \PACOS\LeadsPacos  $leadsPacos
     * @return \Illuminate\Http\Response
     */
    public function show(LeadsPacos $leadsPacos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \PACOS\LeadsPacos  $leadsPacos
     * @return \Illuminate\Http\Response
     */
    public function edit(LeadsPacos $leadsPacos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \PACOS\LeadsPacos  $leadsPacos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LeadsPacos $leadsPacos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \PACOS\LeadsPacos  $leadsPacos
     * @return \Illuminate\Http\Response
     */
    public function destroy(LeadsPacos $leadsPacos)
    {
        //
    }
}

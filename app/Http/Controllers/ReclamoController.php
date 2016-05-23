<?php

namespace App\Http\Controllers;
use App\Reclamo;

use Illuminate\Http\Request;

use App\Http\Requests;

class ReclamoController extends Controller
{
    public function __construct()
    {

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reclamos = Reclamo::all();
        return view('reclamos.index')->with('reclamos',$reclamos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reclamo = new Reclamo();
        $reclamo->tipo_reclamo = $request['tipo'];
        $reclamo->client_nombre = $request['nombre'];
        $reclamo->client_ci = $request['ci'];
        $reclamo->client_phone = $request['phone'];
        $reclamo->car_marca = $request['marca'];
        $reclamo->car_modelo = $request['modelo'];
        $reclamo->car_year = $request['anio'];
        $reclamo->car_placa = $request['placa'];
        $reclamo->grua = $request['grua'];
        $reclamo->save();
        return response()->json(['response' => 'saved']);
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

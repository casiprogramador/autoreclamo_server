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
        $reclamos = Reclamo::where('estado',"Pendiente");
        return view('reclamos.index')->with('reclamos',$reclamos->get());
    }
    
    public function atendidos()
    {
        $reclamos = Reclamo::where('estado',"Atendido");
        return view('reclamos.atendidos')->with('reclamos',$reclamos->get());
    }
    
    public function anulados()
    {
        $reclamos = Reclamo::where('estado',"Anulado");
        return view('reclamos.anulados')->with('reclamos',$reclamos->get());
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
    
    public function atender(Request $request){
        $this->validate($request, [
            'id_reclamo' => 'required',
            'date_atendido' => 'required',
            'des_atendido' => 'required',
        ]);
        $reclamo = Reclamo::find($request['id_reclamo']);
        $reclamo->estado = "Atendido";
        $reclamo->date_atendido = date("Y-m-d", strtotime($request['date_atendido'])); 
        $reclamo->atendido = $request['des_atendido'];
        $reclamo->save();
        return redirect('/reclamo/atendidos');
    }
    
    public function anular(Request $request){
        $this->validate($request, [
            'id_reclamo' => 'required',
            'date_anulado' => 'required',
            'des_anulado' => 'required',
        ]);
        $reclamo = Reclamo::find($request['id_reclamo']);
        $reclamo->estado = "Anulado";
        $reclamo->date_anulado = date("Y-m-d", strtotime($request['date_anulado'])); 
        $reclamo->anulado = $request['des_anulado'];
        $reclamo->save();
        return redirect('/reclamo/anulados');
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

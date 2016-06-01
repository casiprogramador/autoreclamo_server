<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Maatwebsite\Excel\Facades\Excel;
use App\Reclamo;

class ReporteController extends Controller
{

    public function index()
    {
        return view('reportes.index');
    }
    
    public function crear(Request $request){
        $date_init = $request['date_init'];
        $date_end = $request['date_end'];
        $type = $request['tipo_reclamo'];
        $format = $request['formato'];
        $reclamos = Reclamo::select('id','created_at','estado','tipo_reclamo','client_nombre','client_ci','client_phone','car_marca','car_modelo','car_year','car_placa');
        if($date_init) $reclamos->where('created_at', '>=', new \DateTime($date_init));
        if($date_end) $reclamos->where('created_at', '<=', new \DateTime($date_end));
        if($type != 'Todos' ) $reclamos->where('estado', $type);
        Excel::create('Reporte_Reclamos', function($excel) use($reclamos) {
 
            $excel->sheet('Productos', function($sheet) use($reclamos) {

                $sheet->fromArray($reclamos->get());
 
            });
        })->export($format);
    }
}

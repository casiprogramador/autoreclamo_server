<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class DescargaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function gastos_medicos()
    {
        $file= public_path(). "/download/gastos_medicos.pdf";
        $headers = array(
              'Content-Type: application/pdf',
            );
        return response()->download($file, 'gastos_medicos.pdf', $headers);
    }
    
    public function denuncia_siniestro()
    {
        $file= public_path(). "/download/denuncia_siniestro.pdf";
        $headers = array(
              'Content-Type: application/pdf',
            );
        return response()->download($file, 'denuncia_siniestro.pdf', $headers);
    }
    
    public function seguro_arrendamiento()
    {
        $file= public_path(). "/download/seguro_arrendamiento.pdf";
        $headers = array(
              'Content-Type: application/pdf',
            );
        return response()->download($file, 'seguro_arrendamiento.pdf', $headers);
    }
    
    public function seguro_vida()
    {
        $file= public_path(). "/download/seguro_vida.pdf";
        $headers = array(
              'Content-Type: application/pdf',
            );
        return response()->download($file, 'seguro_vida.pdf', $headers);
    }
    
}

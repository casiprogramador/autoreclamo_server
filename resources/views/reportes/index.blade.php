@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-success">
                <div class="panel-heading">Reportes de reclamos</div>

                <div class="panel-body">
                   <form class="form-horizontal" method="POST" action="{{ url('/reportes/crear') }}">
                       {!! csrf_field() !!}
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Fecha Inicio</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control date_report" id="inputEmail3" name="date_init" placeholder="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-4 control-label">Fecha Final</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control date_report" id="inputPassword3" name="date_end" placeholder="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-4 control-label">Tipo de Reclamo</label>
                        <div class="col-sm-8">
                          <select class="form-control" name="tipo_reclamo">
                              <option value="Todos">Todos</option>
                              <option value="Pendiente" >Pendientes</option>
                              <option value="Atendido" >Atendido</option>
                              <option value="Anulado" >Anulados</option>
                            </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-4 control-label">Formato Reporte</label>
                        <div class="col-sm-8">
                          <select class="form-control" name="formato">
                              <option value="xls">Excel 2003</option>
                              <option value="xlsx">Excel 2007</option>
                              <option value="csv" >CSV</option>
                            </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                          <button type="submit" class="btn btn-primary">Obtener Reporte</button>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  
</div>
@endsection


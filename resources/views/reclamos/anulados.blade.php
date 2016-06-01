@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-success">
                <div class="panel-heading">Reclamos anulados</div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>C.I.</th>
                            <th>Numero Celular</th>
                            <th>Tipo Reclamo</th>
                            <th>Requiere Grua</th>
                            <th>Fecha de Envio</th>
                            <th width="20%" >Datos de Anulacion</th>
                            <th>Fecha de Anulacion</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($reclamos as $reclamo)
                        <tr>
                            <th scope="row">{{$reclamo->id}}</th>
                            <td>{{$reclamo->client_nombre}}</td>
                            <td>{{$reclamo->client_ci}}</td>
                            <td>{{$reclamo->client_phone}}</td>
                            <td>{{$reclamo->tipo_reclamo}}</td>
                            <td>{{$reclamo->grua}}</td>
                            <td>{{$reclamo->created_at}}</td>
                            <td>{{$reclamo->anulado}}</td>
                            <td>{{$reclamo->date_anulado}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
     <!-- Modal Informacion Automovil-->
    <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Informacion del Automovil</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal">
              <div class="form-group">
                <label class="col-sm-6 control-label"><strong>Marca:</strong></label>
                <div class="col-sm-6">
                  <p class="form-control-static" id="marca-auto">marca</p>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-6 control-label"><strong>Modelo:</strong></label>
                <div class="col-sm-6">
                  <p class="form-control-static" id="modelo-auto">modelo</p>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-6 control-label"><strong>Año:</strong></label>
                <div class="col-sm-6">
                  <p class="form-control-static" id="anio-auto">anio</p>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-6 control-label"><strong>Placa:</strong></label>
                <div class="col-sm-6">
                  <p class="form-control-static" id="placa-auto">placa</p>
                </div>
              </div>

            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

</div>
@endsection


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Reclamos enviados de clientes</div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>C.I.</th>
                            <th>Marca Auto</th>
                            <th>Modelo Auto</th>
                            <th>Año Auto</th>
                            <th>Placa Auto</th>
                            <th>Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($reclamos as $reclamo)
                        <tr>
                            <th scope="row">{{$reclamo->id}}</th>
                            <td>{{$reclamo->client_nombre}}</td>
                            <td>{{$reclamo->client_ci}}</td>
                            <td>{{$reclamo->car_marca}}</td>
                            <td>{{$reclamo->car_modelo}}</td>
                            <td>{{$reclamo->car_year}}</td>
                            <td>{{$reclamo->car_placa}}</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-bars"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="">Atender Reclamo</a></li>
                                        <li><a href="">Borrar Reclamo</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
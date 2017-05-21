@extends('layout')

@section('title')
  Platform - Inicio Admin
@endsection

@section('content')
<div class="modal fade" id="eliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header cabecera">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Mensaje de la pagina</h4>
      </div>
      <div class="modal-body">
        <p class="text-justify"><strong>¿Esta seguro que desea eliminar este Deportista?.<br></strong></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
        <a type="button" class="btn btn-primary" id="btnconfirm">Sí</a>
      </div>
    </div>
  </div>
</div>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h3>TEST DE FLEXIBILIDAD</h3>
    @foreach($deportista as $dep)
    <div class="form-group">
    <div class="input-group">
      <div class="input-group-addon">{{$dep->nombre_j}} {{$dep->apellido_j}}</div>
    </div>
  </div>
  <br>
  <br>
    <a type="button" class="btn btn-info" href="{{route('testflexibilidad', $dep->dni_j)}}">Agregar Test</a>
    @endforeach
  <table class="table table-hover table-striped table-sm table-bordered" >
    <thead>
      <tr>
      <th class="text-primary">FECHA</th>
      <th class="text-primary">WELL</th>
      <th class="text-primary">FLEXION PROFUNDA</th>
      <th class="text-primary">SPLIT LATERAL</th>
      <th class="text-primary">ELEVACION DE HOMBROS</th>
        </tr>
  </thead>
  @foreach($flexibilidad as $flex)
  <tbody>
    <tr>
      <td>{{$flex->fecha_fl}}</td>
      <td>{{$flex->well}}</td>
      <td>{{$flex->f_profunda}}</td>
      <td>{{$flex->split_lateral}}</td>
      <td>{{$flex->elev_hombro	}}</td>
      <td>
        <div class="btn-group btn-group-xs" role="group" aria-label="...">
           <a type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#eliminar" onclick="return confirmar('{{route('eliminarflexibilidad', $flex->codigo_fl)}}')"><i class="fa fa-trash-o" aria-hidden="true"> Eliminar</i></a>
        </div>
      </td>
    </tr>
  </tbody>
  @endforeach
  </table>
</div>
<script>
function confirmar(url)
{
  var ruta = url;
  var d = document.getElementById("btnconfirm");
  d.setAttribute("href", ruta);
  //window.location=url;
  //
}
</script>
@endsection

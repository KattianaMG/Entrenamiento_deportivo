@extends('layout')

@section('title')
  Platform - Inicio Admin
@endsection

@section('content')
<!-- Modal -->
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

<button type="submit" class="btn btn-primary">Transfer cash</button>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h3>DEPORTISTAS</h3>
  <table class="table table-hover table-striped table-sm table-bordered" >
    <thead>
      <tr>
      <th class="text-primary">CEDULA</th>
      <th class="text-primary">NOMBRES</th>
      <th class="text-primary">APELLIDOS</th>
      <th class="text-primary">SEXO</th>
      <th class="text-primary">DEPORTE</th>
      <th class="text-primary">EDAD</th>
      <th class="text-primary">SEMESTRE</th>
      <th class="text-primary">PROMEDIO</th>
      <th class="text-primary">TEST</th>
      <th class="text-primary">CONTROLES</th>
      </tr>
    </thead>
    @foreach($deportistas as $dep)
    <tbody>
      <tr>
        <td>{{$dep->dni_j}}</td>
        <td>{{$dep->nombre_j}}</td>
        <td>{{$dep->apellido_j}}</td>
        <td>{{$dep->sexo_j}}</td>
        <td>{{$dep->deporte_j}}</td>
        <td>{{$dep->edad_j}}</td>
        <td>{{$dep->semestre}}</td>
        <td>{{$dep->promedio}}</td>
        <td>
          <div class="btn-group btn-group-xs" role="group" aria-label="...">
            <a type="button" class="btn btn-primary" href="{{route('listtestfuerza', $dep->dni_j)}}">FUERZA</a>
            <a type="button" class="btn btn-success" href="{{route('listarresistencia', $dep->dni_j)}}">RESISTENCIA</a>
          </div>
          <br>
          <div class="btn-group btn-group-xs" role="group" aria-label="...">
            <a type="button" class="btn btn-info" href="{{route('listarflexibilidad', $dep->dni_j)}}">FLEXIBILIDAD</a>
            <a type="button" class="btn btn-warning" href="{{route('listarcorporal', $dep->dni_j)}}">C. CORPORAL</a>
          </div>
         </div>
        </td>
        <td>
          <div class="btn-group btn-group-xs" role="group" aria-label="...">
            <a type="button" href="{{route('editardeportista', $dep->dni_j)}}" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"> Editar</i></a>
          </div>
          <div class="btn-group btn-group-xs" role="group" aria-label="...">
             <a type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#eliminar" onclick="return confirmar('{{route('eliminar.deportista', $dep->dni_j)}}')"><i class="fa fa-trash-o" aria-hidden="true"> Eliminar</i></a>
          </div>
        </td>
      </tr>
    <!--  <th scope="row">1</th>-->

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

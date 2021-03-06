@extends('layout')

@section ('title')
  Test resistencia
  @endsection
  @section ('content')


<br>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h2>REALIZAR TEST DE FLEXIBILIDAD</h2>
  <br>
    @foreach($deportista as $dep)
  <div class="form-group">
  <div class="input-group">
    <div class="input-group-addon">{{$dep->nombre_j}} {{$dep->apellido_j}}</div>
  </div>
</div>

  <form class="" action="{{route('guardarflexibilidad', $dep->dni_j)}}" method="POST" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <div class="col-md-6">
      <div class="form-group">
        <label for="dni" class="text-primary">FECHA:</label>
        <input class="form-control" type="date"  name="fecha" id="fecha"><!--caja de texto-->
      </div>
        <div class="form-group">
          <label for="dni" class="text-primary">RESULTADO TEST DE WELL:</label>
          <input class="form-control" type="int" name="well" id="well"><!--caja de texto-->
        </div>
        <div class="form-group">
          <label for="nombre" class="text-primary">RESULTADO TEST DE FLEXION PROFUNDA:</label>
          <input class="form-control" type="int" name="flexion_profunda"  id="flexion_profunda"><!--caja de texto-->
        </div>
        <div class="form-group">
          <label for="apellido" class="text-primary">RESULTADO TEST DE SPLIT LATERAL:</label>
          <input class="form-control" type="int" name="split_lateral" id="split_lateral"><!--caja de texto-->
        </div>
        <div class="form-group">
          <label for="apellido" class="text-primary">RESULTADO TEST DE ELEVACION DE HOMBROS:</label>
          <input class="form-control" type="int" name="elevacion_hombros" id="elevacion_hombros"><!--caja de texto-->
        </div>

        <div class="col-md-6 ">
          <button type="submit" class="btn btn-success">Guardar</button>
        </div>
  </div>
  <aside class="col-md-6">
      <img src="{{ asset('imagenes/flex.png')}}" >
  </aside>

  </form>
</div>
@endforeach
@endsection

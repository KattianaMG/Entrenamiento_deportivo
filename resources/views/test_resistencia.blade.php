@extends('layout')

@section ('title')
  Test resistencia
  @endsection
  @section ('content')


<br>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h2>REALIZAR TEST DE RESISTENCIA</h2>
  <br>
  @foreach($deportista as $dep)
  <div class="form-group">
  <div class="input-group">
    <div class="input-group-addon">{{$dep->nombre_j}} {{$dep->apellido_j}}</div>
  </div>
</div>
  <form class="" action="{{route('guardarresistencia', $dep->dni_j)}}" method="POST" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <div class="col-md-6">
      <div class="form-group">
        <label for="dni" class="text-primary">FECHA:</label>
        <input class="form-control" type="date"  name="fecha" id="fecha"><!--caja de texto-->
      </div>
        <div class="form-group">
          <label for="dni" class="text-primary">RESULTADO TEST DE COOPER:</label>
          <input class="form-control" type="int"  name="cooper" id="cooper"><!--caja de texto-->
        </div>
        <div class="form-group">
          <label for="nombre" class="text-primary">RESULTADO TEST DE LEGER:</label>
          <input class="form-control" type="int" name="leger" id="leger"><!--caja de texto-->
        </div>
        <div class="form-group">
          <label for="apellido" class="text-primary">RESULTADO TEST DE BURPEES:</label>
          <input class="form-control" type="int"name="burpees" id="burpees"><!--caja de texto-->
        </div>

        <div class="col-md-6 ">
          <button type="submit" class="btn btn-success">Guardar</button>
        </div>
  </div>
  <aside class="col-md-6">
    <img src="{{ asset('imagenes/t_resistencia.jpg')}}" class="img-responsive"/ >
  </aside>


  </form>
</div>
@endforeach
@endsection

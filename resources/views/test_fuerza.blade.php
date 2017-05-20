@extends('layout')

@section ('title')
  Test resistencia
  @endsection
  @section ('content')


<br>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h2>REALIZAR TEST DE FUERZA</h2>
  <br>
  <div class="form-group">
  <div class="input-group">
    <div class="input-group-addon">00</div>
  </div>
</div>

  <form class="" action="{{route('guardar.entrenador')}}" method="POST" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <div class="col-md-6">
      <div class="form-group">
        <label for="dni" class="text-primary">FECHA:</label>
        <input class="form-control" type="date"  name="sit up" id="fecha"><!--caja de texto-->
      </div>
        <div class="form-group">
          <label for="dni" class="text-primary">RESULTADO TEST DE SIT UP:</label>
          <input class="form-control" type="int"name="sit up" id="sit up"><!--caja de texto-->
        </div>
        <div class="form-group">
          <label for="nombre" class="text-primary">RESULTADO TEST DE PRESS BANCA:</label>
          <input class="form-control" type="int" name="press banca"  id="press banca"><!--caja de texto-->
        </div>
        <div class="form-group">
          <label for="apellido" class="text-primary">RESULTADO TEST DE CURL BICEPS :</label>
          <input class="form-control" type="int" name="curl biceps" id="curl biceps"><!--caja de texto-->
        </div>
        <div class="form-group">
          <label for="apellido" class="text-primary">RESULTADO TEST DE SENTADILLA:</label>
          <input class="form-control" type="int" name="sentadilla" id="sentadilla"><!--caja de texto-->
        </div>
        <div class="form-group">
          <label for="apellido" class="text-primary">RESULTADO TEST DE HOMBROS:</label>
          <input class="form-control" type="int" name="hombro" id="hombro"><!--caja de texto-->
        </div>

        <div class="col-md-6 ">
          <button type="submit" class="btn btn-success">Guardar</button>
        </div>
  </div>
  <aside class="col-md-6">
    <img src="{{ asset('imagenes/t_fuerza.jpg')}}" >
</aside>


  </form>
</div>
@endsection

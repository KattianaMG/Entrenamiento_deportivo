@extends('layout')

@section ('title')
  Test resistencia
  @endsection
  @section ('content')


<br>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h2>REALIZAR TEST DE COMPOSICION CORPORAL</h2>
  <br>
  <form class="" action="{{route('guardar.entrenador')}}" method="POST" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <div class="col-md-6">
      <div class="form-group">
        <label for="dni" class="text-primary">FECHA:</label>
        <input class="form-control" type="date"  name="sit up" id="fecha"><!--caja de texto-->
      </div>
        <div class="form-group">
          <label for="dni" class="text-primary">RESULTADO TEST DE TALLA:</label>
          <input class="form-control" type="int" name="talla" id="talla"><!--caja de texto-->
        </div>
        <div class="form-group">
          <label for="nombre" class="text-primary">RESULTADO TEST DE PESO:</label>
          <input class="form-control" type="int" name="peso"  id="peso"><!--caja de texto-->
        </div>
        <div class="form-group">
          <label for="apellido" class="text-primary">RESULTADO TEST IMC:</label>
          <input class="form-control" type="int" name="imc" id="imc"><!--caja de texto-->
        </div>
        <div class="form-group">
          <label for="apellido" class="text-primary">RESULTADO TEST DE PERIMETRO ABDOMINAL:</label>
          <input class="form-control" type="int" name="p_abdominal" id="p_abdominal"><!--caja de texto-->
        </div>

        <div class="col-md-6 ">
          <button type="submit" class="btn btn-success">Guardar</button>
        </div>
  </div>
  <aside class="col-md-6">
    <img src="{{ asset('imagenes/corporal.jpg')}}" class="img-responsive" >
  </aside>


  </form>
</div>
@endsection

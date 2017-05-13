@extends('layout')

@section ('title')
  Test resistencia
  @endsection
  @section ('content')


<br>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h2>REALIZAR TEST DE RESISTENCIA</h2>
  <br>
  <form class="" action="{{route('guardar.entrenador')}}" method="POST" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <div class="col-md-6">
        <div class="form-group">
          <label for="dni" class="text-primary">RESULTADO TEST DE COOPER:</label>
          <input class="form-control" type="int" placeholder="cooper" name="cooper" id="cooper"><!--caja de texto-->
        </div>
        <div class="form-group">
          <label for="nombre" class="text-primary">RESULTADO TEST DE LEGER:</label>
          <input class="form-control" type="int" name="leger" placeholder="leger" id="leger"><!--caja de texto-->
        </div>
        <div class="form-group">
          <label for="apellido" class="text-primary">RESULTADO TEST DE BURPEES:</label>
          <input class="form-control" type="int" placeholder="burpees"name="burpees" id="burpees"><!--caja de texto-->
        </div>

        <div class="col-md-6 ">
          <button type="submit" class="btn btn-success">Guardar</button>
        </div>
  </div>



  </form>
</div>
@endsection

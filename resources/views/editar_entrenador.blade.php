
@extends('layout')

@section ('title')
  Registrar entrenador
  @endsection
  @section ('content')

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <h1>EDITAR ENTRENADOR</h1>
      <br>
      @foreach ($entrenador as $ent)
      <form class="" action="{{route('edit.entrenador', $ent->dni)}}" method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="col-md-6">
            <div class="form-group">
              <label for="nombre" class="text-primary">NOMBRE:</label>
              <input class="form-control" type="text" name="name" value="{{$ent->name}}" value="{{ old('name') }}"><!--caja de texto-->
            </div>
            <div class="form-group">
              <label for="apellido" class="text-primary">APELLIDOS:</label>
              <input class="form-control" type="text" value="{{$ent->apellido}}" name="apellido" id="apellido"><!--caja de texto-->
            </div>
            <div class="form-group">
              <label for="email" class="text-primary">EMAIL:</label>
              <input class="form-control" type="email" value="{{$ent->email}}" name="email" value="{{ old('email') }}">
            </div>

          <div class="form-group">
            <label for="categoria" class="text-primary">SEXO:</label>
            <select class="form-control" name="sexo">
              <option value="{{$ent->sexo}}">{{$ent->sexo}}</option>
              <option value=""></option>
              <option value="M">M</option>
              <option value="F">F</option>
            </select>
         </div>

            <div class="col-md-6 ">
              <button type="submit" class="btn btn-success">Guardar</button>
            </div>
      </div>

          <div class="col-md-6">
            <div class="form-group">
              <label for="nombre" class="text-primary">DEPORTE:</label>
              <input class="form-control" type="text" value="{{$ent->deporte}}" name="deporte" id="deporte"><!--caja de texto-->
            </div>
            <div class="form-group">
              <label for="profecion" class="text-primary">PROFESION:</label>
              <input class="form-control" type="text" value="{{$ent->profesion}}" name="profesion" id="profesion"><!--caja de texto-->
            </div>
             <div class="form-group">
               <label for="profecion" class="text-primary">DIRECCION:</label>
               <input class="form-control" type="text" value="{{$ent->direccion}}" name="direccion" id="direccion"><!--caja de texto-->
             </div>
        </div>
      </form>
      @endforeach
</div>





<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

</script>
@endsection

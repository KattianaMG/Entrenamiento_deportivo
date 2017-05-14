
@extends('layout')

@section ('title')
  Registrar entrenador
  @endsection
  @section ('content')

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <h1>REISTRAR ENTRENADOR</h1>
      <form class="" action="{{route('guardar.entrenador')}}" method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="col-md-6">
            <div class="form-group">
              <label for="dni">NUMERO DE DOCUMENTO:</label>
              <input class="form-control" type="text" placeholder="numero identificación" name="dni" id="dni"><!--caja de texto-->
            </div>
            <div class="form-group">
              <label for="nombre">NOMBRE:</label>
              <input class="form-control" type="text" name="name" placeholder="nombre" value="{{ old('name') }}"><!--caja de texto-->
            </div>
            <div class="form-group">
              <label for="apellido">APELLIDOS:</label>
              <input class="form-control" type="text" placeholder="apellido"name="apellido" id="apellido"><!--caja de texto-->
            </div>
            <div class="form-group">
              <label for="email">EMAIL:</label>
              <input class="form-control" type="email" placeholder="Email" name="email" value="{{ old('email') }}">
            </div>

          <div class="form-group">
            <label for="categoria">SEXO</label>
            <select class="form-control" name="sexo">
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
              <label for="nombre">DEPORTE:</label>
              <input class="form-control" type="text" placeholder="deporte que practica"name="deporte" id="deporte"><!--caja de texto-->
            </div>
            <div class="form-group">
              <label for="profecion">PROFESION:</label>
              <input class="form-control" type="text" placeholder="profesion"name="profesion" id="profesion"><!--caja de texto-->
            </div>
             <div class="form-group">
               <label for="profecion">DIRECCION:</label>
               <input class="form-control" type="text" placeholder="direccion"name="direccion" id="direccion"><!--caja de texto-->
             </div>
             <div class="form-group">
               <label for="profecion">CONTRASEÑA:</label>
               <input class="form-control" type="password" placeholder="*******" name="password"><!--caja de texto-->
             </div>
             <div class="form-group">
               <label for="profecion">CONFIRMAR CONTRASEÑA:</label>
               <input class="form-control" type="password" placeholder="*******" name="password_confirmation"><!--caja de texto-->
             </div>
        </div>
      </form>
</div>






----
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

</script>
@endsection


@extends('layout')

@section ('title')
  Registrar entrenador
  @endsection
  @section ('content')

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <h1>REGISTRAR ENTRENADOR</h1>
      @include('errors.errors')
      <form class="" action="{{route('guardar.entrenador')}}" method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="col-md-6">
          <br>
            <div class="form-group text-primary">
             <label for="dni">NUMERO DE DOCUMENTO:</label>
              <input class="form-control" type="text" placeholder="numero identificación" name="dni" id="dni" required pattern="[0-9]{5,}" title="SOLO DATOS NUMERICOS"/><!--caja de texto-->
            </div>
            <div class="form-group text-primary">
              <label for="nombre">NOMBRE:</label>
              <input class="form-control" type="text" name="name" placeholder="nombre" value="{{ old('name') }}" required pattern="[A-Z,a-z]{2,}" title="SOLO TEXTO" /><!--caja de texto-->
            </div>
            <div class="form-group text-primary">
              <label for="apellido">APELLIDOS:</label>
              <input class="form-control" type="text" placeholder="apellido"name="apellido" id="apellido" required pattern="[A-Z,a-z]{2,}" title="SOLO TEXTO" /><!--caja de texto-->
            </div>
            <div class="form-group text-primary">
              <label for="email">EMAIL:</label>
              <input class="form-control" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required />
            </div>
          <div class="form-group text-primary">
            <label for="categoria">SEXO</label>
            <select class="form-control" name="sexo">
              <option value="M">M</option>
              <option value="F">F</option>
            </select>
         </div>

            <div class="col-md-6">
              <button type="submit" class="btn btn-success">Guardar</button>
            </div>
      </div>
<br>
          <div class="col-md-6" "text-primary">
            <div class="form-group text-primary">
              <label for="nombre">DEPORTE:</label>
              <input class="form-control" type="text" placeholder="deporte que practica"name="deporte" id="deporte" required pattern="[A-Z,a-z]{2,}" title="SOLO TEXTO" /><!--caja de texto-->
            </div>
            <div class="form-group text-primary">
              <label for="profecion">PROFESION:</label>
              <input class="form-control" type="text" placeholder="profesion"name="profesion" id="profesion" required pattern="[A-Z,a-z]{2,}" title="SOLO TEXTO" /><!--caja de texto-->
            </div>
             <div class="form-group text-primary">
               <label for="profecion">DIRECCION:</label>
               <input class="form-control" type="text" placeholder="direccion"name="direccion" id="direccion" required /><!--caja de texto-->
             </div>
             <div class="form-group text-primary">
               <label for="profecion">CONTRASEÑA:</label>
               <input class="form-control" type="password" placeholder="*******" name="password" required=""><!--caja de texto-->
             </div>
             <div class="form-group text-primary">
               <label for="profecion">CONFIRMAR CONTRASEÑA:</label>
               <input class="form-control" type="password" placeholder="*******" name="password_confirmation" required=""><!--caja de texto-->
             </div>
        </div>
      </form>
</div>






----
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

</script>
@endsection

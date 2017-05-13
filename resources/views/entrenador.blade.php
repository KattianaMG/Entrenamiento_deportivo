
@extends('layout')

@section ('title')
  Registrar entrenador
  @endsection
  @section ('content')

    <br>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <h1>REISTRAR ENTRENADOR</h1>
      <form>
        <div class="col-md-6">
            <div class="form-group">
              <label for="dni">NUMERO DE DOCUMENTO:</label>
              <input class="form-control" type="text" placeholder="dni" name="dni" id="dni"><!--caja de texto-->
            </div>
            <div class="form-group">
              <label for="nombre">NOMBRES:</label>
              <input class="form-control" type="text" placeholder="nombre"name="nombre" id="nombre"><!--caja de texto-->
            </div>
            <div class="form-group">
              <label for="apellido">APELLIDOS:</label>
              <input class="form-control" type="text" placeholder="apellido"name="apellido" id="apellido"><!--caja de texto-->
            </div>

          <div class="form-group">
            <label for="categoria">SEXO</label>
            <select class="form-control" name="categoria">
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
               <input class="form-control" type="text" placeholder="direccion"name="profesion" id="direccion"><!--caja de texto-->
             </div>
        </div>




      </form>
</div>






----
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

</script>
@endsection

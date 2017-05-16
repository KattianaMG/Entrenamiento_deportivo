@extends('layout')

@section ('title')
  Registrar entrenador
  @endsection
  @section ('content')

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <h1>REGISTRAR DEPORTISTA</h1>
    <section class="main row">
      <div class="col-md-6">
        <form class="" action="{{route('guardar.deportista')}}" method="POST" enctype="multipart/form-data">
          {!! csrf_field() !!}
          <br>
          <div class="form-group">
            <label for="dni" class="text-primary">NUMERO DE DOCUMENTO:</label>
            <input class="form-control" type="text" placeholder="dni" name="dni" id="dni"><!--caja de texto-->
            </div>
            <div class="form-group">
            <label for="nombre" class="text-primary">NOMBRE:</label>
            <input class="form-control" type="text" placeholder="nombre"name="nombre" id="nombre"><!--caja de texto-->
              </div>
            <div class="form-group">
            <label for="apellido" class="text-primary">APELLIDOS:</label>
            <input class="form-control" type="text" placeholder="apellido"name="apellido" id="apellido"><!--caja de texto-->
              </div>
            <div class="form-group">
              <label for="categoria" class="text-primary">SEXO:</label>
              <select class="form-control" name="sexo">
                <option value="M">M</option>
                <option value="F">F</option>
              </select>
           </div>
            <div class="form-group">
            <label for="nombre" class="text-primary">DEPORTE:</label>
            <input class="form-control" type="text" placeholder="deporte a practicar"name="deporte" id="deporte"><!--caja de texto-->
                </div>
            <div class="form-group">
            <label for="semestre" class="text-primary">SEMESTRE:</label>
            <input class="form-control" type="text" placeholder="semestre en curso" name="semestre" id="semestre"><!--caja de texto-->
                  </div>
            <div class="form-group">
            <label for="semestre" class="text-primary">PROMEDIO:</label>
            <input class="form-control" type="text" placeholder="promedio ponderado" name="promedio" id="promedio"><!--caja de texto-->
                  </div>
            <div class="form-group">
            <label for="edad" class="text-primary">EDAD:</label>
            <input class="form-control" type="text" placeholder="edad" name="edad" id="edad"><!--caja de texto-->
            </div>

            <div class="form-group">
              <label for="categoria" class="text-primary">ENTRENADOR:</label>
              <select class="form-control" name="entrenador">
                <option value=""></option>
                @foreach($consulta as $con)
                <option value="{{$con->dni}}">{{$con->name}}</option>
                @endforeach
              </select>
           </div>

            <div class="form-group">
              <button class="btn btn-success">Guardar</button>
            </div>
        <form/>
      </div>
      <!--la otra divicion de la pantalla-->
        <br><br>
        <aside class="col-md-6">
          <div id="carousel-1" class="carousel slide" data-ride="carousel">
            <!--indicadore-->
            <ol class="carousel-indicators">
              <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-1" data-slide-to="1"></li>
              <li data-target="#carousel-1" data-slide-to="2"></li>
              <li data-target="#carousel-1" data-slide-to="3"></li>
            </ol>
            <!--contenedor de los slide-->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="{{asset('imagenD/imagen1.jpg')}}" class="img-responsive" width="900" height="900">
                <div class="carousel-caption">
                  <h3>equipo de baloncesto</h3>
                </div>
              </div>
              <div class="item">
                <img src="{{asset('imagenD/imagen2.jpg')}}" class="img-responsive" width="900" height="900">
                <div class="carousel-caption">
                  <h3>equipo de softbol</h3>
                </div>
              </div>
              <div class="item">
                <img src="{{asset('imagenD/imagen3.jpg')}}" class="img-responsive" width="900" height="900">
                <div class="carousel-caption">
                  <h3>equipo de halterofilia</h3>
                </div>
              </div>
              <div class="item">
                <img src="{{asset('imagenD/imagen4.jpg')}}" class="img-responsive" width="900" height="900">
                <div class="carousel-caption">
                  <h3>equipo de rugby</h3>
                </div>
              </div>
            </div>
          </div>
        </aside>
      <!--la otra parte de la pantalla-->
    </section>

  </div>

@extends('layout')

@section ('title')
  Registrar entrenador
  @endsection
  @section ('content')
<div class="container text-center">
  <br>
  <br>
  <br>
  <div class=" col-md-6 col-md-offset-4">
    <i class="fa fa-user"></i> Iniciar sesión
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="row">
      <div class=" col-md-6 col-md-offset-4">
          <div class="page">
      <form method="POST" action="/auth/login">
          {!! csrf_field() !!}

          <div class="form-group">
              <label for="email">Email</label>
              <input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="email@ejemplo.com">
          </div>

          <div class="form-group">
              <label for="password">Password</label>
              <input class="form-control" type="password" name="password" id="password" placeholder="******">
          </div>

          <div class="form-group">
              <button class="btn btn-primary btn-bolck" type="submit">Iniciar Sesión</button>
          </div>
      </form>
    </div>
  </div>
</div>

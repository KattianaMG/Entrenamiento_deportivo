@extends('layout')

@section('title')
  Platform - Inicio Admin
@endsection

@section('content')


<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h3>TEST DE FUERZA</h3>
    @foreach($deportista as $dep)
    <div class="form-group">
    <div class="input-group">
      <div class="input-group-addon">{{$dep->nombre_j}} {{$dep->apellido_j}}</div>
    </div>
  </div>
  <br>
  <br>
    <a type="button" class="btn btn-info" href="{{route('testfuerza', $dep->dni_j)}}">Agregar Test</a>
    @endforeach
    <br>
    <br>
  <table class="table table-hover table-striped table-sm table-bordered" >
    <thead>
      <tr>
      <th class="text-primary">FECHA</th>
      <th class="text-primary">SIT UP</th>
      <th class="text-primary">PRESS BANCA</th>
      <th class="text-primary">CURL BICEPS</th>
      <th class="text-primary">SENTADILLA</th>
      <th class="text-primary">HOMBROS</th>
    </tr>
  </thead>
  @foreach($fuerza as $force)
  <tbody>
    <tr>
      <td>{{$force->fecha_fz}}</td>
      <td>{{$force->sit_up}}</td>
      <td>{{$force->press_banca}}</td>
      <td>{{$force->curl_biceps}}</td>
      <td>{{$force->sentadilla}}</td>
      <td>{{$force->f_hombro}}</td>
    </tr>
  </tbody>
  @endforeach
  </table>
</div>
<script>

</script>
@endsection

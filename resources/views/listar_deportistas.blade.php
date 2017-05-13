@extends('layout')

@section('title')
  Platform - Inicio Admin
@endsection

@section('content')

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<table class="table table-hover table-striped" >
  <thead>
<tr>
<th>CEDULA</th>
<th>NOMBRES</th>
<th>APELLIDOS</th>
<th>SEXO</th>
<th>DEPORTE</th>
<th>EDAD</th>
</tr>
</thead>
<tbody>
<tr>
<td>12345</td>
<td>Juan Carlos</td>
<td>Salcedo Baldovino</td>
<td>M</td>
<td>Rugby</td>
<td>25</td>
</tr>
<tr>
<td>var. id_d</td>
<td>var.nombre_d </td>
<td>var. apellido_d</td>
<td>var. sexo_d</td>
<td>var. deporte_d</td>
<td>var. edad_d</td>
</tr>
<!--  <th scope="row">1</th>-->
<tr>
<td>var. id_d</td>
<td>var.nombre_d </td>
<td>var. apellido_d</td>
<td>var. sexo_d</td>
<td>var. deporte_d</td>
<td>var. edad_d</td>
</tr>
</tbody>
</table>
</div>
@endsection

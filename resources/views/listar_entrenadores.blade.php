@extends('layout')

@section('title')
  Platform - Inicio Admin
@endsection

@section('content')

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<table class="table table-hover table-striped table-sm" >
  <thead>
<tr>
<th>CEDULA</th>
<th>NOMBRES</th>
<th>APELLIDOS</th>
<th>SEXO</th>
<th>DEPORTE</th>
<th>PROFECION</th>
<th>DIRECCION</th>
</tr>
</thead>
<tbody>
<tr>
<td>12345</td>
<td>Juan Carlos</td>
<td>Salcedo Baldovino</td>
<td>M</td>
<td>Rugby</td>
<td>Ingeniero</td>
<td>Cerete</td>
</tr>
<tr>
<td>var. id_e</td>
<td>var.nombre_e </td>
<td>var. apellido_e</td>
<td>var. sexo_e</td>
<td>var. deporte</td>
<td>var. profecion</td>
<td>var. direccion</td>
</tr>
<!--  <th scope="row">1</th>-->
<tr>
<td>var. id_e</td>
<td>var.nombre_e </td>
<td>var. apellido_e</td>
<td>var. sexo_e</td>
<td>var. deporte_e</td>
<td>var. profecion</td>
<td>var. direccion</td>
</tr>
</tbody>
</table>
</div>
@endsection

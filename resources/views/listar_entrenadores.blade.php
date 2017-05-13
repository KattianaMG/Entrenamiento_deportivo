@extends('layout')

@section('title')
  Platform - Inicio Admin
@endsection

@section('content')

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<table class="table table-hover table-striped table-sm table-bordered" >
  <thead>
<tr>
<th class="text-primary">CEDULA</th>
<th class="text-primary">NOMBRES</th>
<th class="text-primary">APELLIDOS</th>
<th class="text-primary">SEXO</th>
<th class="text-primary">DEPORTE</th>
<th class="text-primary">PROFECION</th>
<th class="text-primary">DIRECCION</th>
</tr>
</thead>
<tbody>
<tr>
<td>98765</td>
<td>Carlos Alberto</td>
<td>Cabarcas Peñata</td>
<td>M</td>
<td>Futbol</td>
<td>Ingeniero</td>
<td>calle 25 b/ dorado</td>
</tr>

<!--  <th scope="row">1</th>-->

</tbody>
</table>
</div>
@endsection

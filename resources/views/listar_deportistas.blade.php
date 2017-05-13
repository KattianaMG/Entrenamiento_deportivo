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
<th class="text-primary">EDAD</th>
<th class="text-primary">SEMESTRE</th>
<th class="text-primary" >PROMEDIO</th>
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
<td>8</td>
<td>3.0 </td>
</tr>

<!--  <th scope="row">1</th>-->

</tbody>
</table>
</div>
@endsection

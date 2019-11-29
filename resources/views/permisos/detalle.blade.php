@extends('adminlte::page')
@section('content')
<h1>Detalle de Permiso</h1>
<hr />
<h4>Id: {{ $permiso->id }}</h4>
<h4>Nombre: {{ $permiso->nombre }}</h4>
<h4>Descripción: {{ $permiso->descripcion }}</h4>
<h4>Link: {{ $permiso->link }}</h4>
@endsection

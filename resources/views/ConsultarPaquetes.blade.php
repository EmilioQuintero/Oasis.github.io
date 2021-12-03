@extends('layouts.app')
@section('content')
<style>
    body {
        background-image: url('assets/Fondo2.jpg');
        background-size: cover;
    }
</style>
<br>
<div class="container">
<h3 align="center">Consulta de Paquetes</h3>
<table class="table table-striped">
    <thead class="thead-light">
        <tr>
            <th>Descripcion</th>
            <th>Fecha</th>
            <th>Precio</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td align="center">
                <a class= "btn btn-outline-secondary">Editar</a> | <a class= "btn btn-outline-danger">Borrar</a>
            </td>
        </tr>
    </tbody>
</table>
</div>
@endsection
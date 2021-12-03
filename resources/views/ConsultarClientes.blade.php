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
<h3 align="center">Consulta de Clientes</h3>
<table class="table table-striped">
    <thead class="thead-light">
        <tr>
            
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo Electronico</th>
            <th>Telefono</th>
            <th>Direccion</th>
            <th>Codigo Postal</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
            <a class= "btn btn-outline-secondary">Editar</a> | <a class= "btn btn-outline-danger">Borrar</a>
            </td>
        </tr>
    </tbody>
</table>
</div>
@endsection
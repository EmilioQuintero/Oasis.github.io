@extends('layouts.app')

@section('content')
<style>
body {
  background-image: url('assets/Fondo2.jpg');
  background-size: cover;
}
</style>
<body><br><br>
    <div class="col-md-6 mx-auto bg-white rounded p-3 "><br><br>

        <h2 class="text-center green">Su paquete seleccionado es: </h2>

        <h2 class="text-center green">Tiene un valor total de: </h2>
       
        <form class="form-group" action="" method="post" novalidate enctype="multipart/form-data">
            @csrf
            <div class="row align-items-start">
                <div class="col-4">
                <label for="marca">Marca:</label>
                <input type="text" class="form-control @error("marca") is-invalid @enderror" name="marca" id="marca" value="{{ old("marca") }}">
                @error("marca")
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="col-4">
                <label for="modelo">Modelo:</label>
                <input type="text" class="form-control @error("modelo") is-invalid @enderror" name="modelo" id="modelo" value="{{ old("modelo") }}">
                @error("modelo")
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="col-4">
                <label for="año">Año:</label>
                <input type="text" class="form-control @error("año") is-invalid @enderror" name="año" id="año" value="{{ old("año") }}">
                @error("año")
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
            </div>
            <div class="row align-items-start my-5">
                <div class="col-4">
                <label for="placa">Placa:</label>
                <input type="text" class="form-control @error("placa") is-invalid @enderror" name="" id="" value="{{ old("placa") }}">
                @error("placa")
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="col-4">
                <label for="numSerie">Número de serie:</label>
                <input type="text" class="form-control @error("numSerie") is-invalid @enderror" name="" id="" value="{{ old("numSerie") }}">
                @error("numSerie")
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="col-4">
                <label for="imagenes">Imágenes del auto:</label>
                <br>
                <input type="file"  name="" multiple id="" />
                @error("imagenes")
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
            </div>
                <input type="text" style="visibility: hidden" value="" name="id">
                <center>
                <input type="submit" value="Realizar Pago" class="btn btn-outline-primary">
                <center>
        </form>
        
        
        <br><br></div>
    </body>
    
@endsection

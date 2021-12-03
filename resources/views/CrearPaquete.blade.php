@extends('layouts.app')

@section('content')
<style>
    body {
        background-image: url('assets/Fondo2.jpg');
        background-size: cover;
    }
</style>

<body><br><br>
<h3 align="center">Registro Paquete</h3>
    <div class="col-md-6 mx-auto bg-white rounded p-3 "><br><br>
        <form class="form-group" action="{{url('/api/Paquetes')}}" method="post" novalidate enctype="multipart/form-data">

            @csrf


            <!-- Descripcion del paquete -->
            <div class="form-group">
                <label for="descripcion"> descripcion: </label>
                <input type="text" id="descripcion" class="form-control" name="descripcion" value="{{isset($paquetes->descripcion)?$paquetes->descripcion:old('descripcion')}}" id="descripcion">
                @error("descripcion")
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <!-- Fecha Final -->
            <div class="form-group">
                <label for="fechaFinal"> Fecha de Vencimiento: </label>
                <input type="date" id="fechaFinal" class="form-control" name="fechaFinal" value="{{isset($paquetes->fechaFinal)?$paquetes->fechaFinal:old('fechaFinal')}}" id="fechaFinal">
                @error("fechaFinal")
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <!-- Precio -->
            <div class="form-group">
                <label for="precio:"> Precio: </label>
                <input type="text" id="precio" class="form-control" name="precio" value="{{isset($paquetes->precio)?$paquetes->precio:old('precio')}}" id="precio">
                @error("Precio:")
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <fieldset>
                <input type="checkbox" name="" id="">servicio 1 <br>
                <input type="checkbox" name="" id="">servicio 2 <br>
                <input type="checkbox" name="" id="">servicio 3 <br>
                <input type="checkbox" name="" id="">servicio 4 <br>
            </fieldset>
            <input type="text" style="visibility: hidden" value="" name="id">
            <center>
                <a href="/home" type="button" id="btnCrear"  class="btn btn-outline-primary">Crear Paquete</a>
                <center>
    </div>


            <div class="form-group">
             


            </div>

    </div>

    </form>


    <br><br></div>
<script type="text/javascript">
$("#btnCrear").on('click',function(){
    $.ajaxSetup({
     headers: {
        'Authorization':"Bearer "+getCookie('token')
           
     }
    }); 
    var descripcion=document.getElementById("descripcion").value;
    var fecha=document.getElementById("fechaFinal").value;
    var precio=document.getElementById("precio").value;
    if (descripcion && fecha && precio){
    $.ajax({
          url:"/api/Paquetes",
          data:{'descripcion':descripcion,'fechaFinal':fecha,'precio':precio},
          type:'post',
          success: function (response) {
          alert("Datos Guardados Correctamente");
          },
          statusCode: {
             404: function() {
                alert('web not found');
             }
          },
          error:function(x,xs,xt){
            alert('Ha ocurrido un error');
          }
});
}else{
    alert("Ingresa todos los campos")
}
});
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}
</script>
</body>
@endsection
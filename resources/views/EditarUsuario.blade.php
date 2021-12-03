@extends('layouts.app')

@section('content')

<style>
    
    body{
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
    
</style>

<div class="container">
    <div class="main-body">
        <br>
    
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{ Auth::user()->name }} {{ Auth::user()->apellido_paterno }} {{ Auth::user()->apellido_materno }} </h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-center align-items-center flex-wrap">
                     <a href="{{url('/EditarUsuario')}}" class="btn btn-outline-primary">Editar Perfil</a>

                  </li>
                  <li class="list-group-item d-flex justify-content-center align-items-center flex-wrap">
                  <a href="" class="btn btn-outline-primary">Tus polizas</a>
                  </li>
                  
                </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                <div class="col-lg-8">
					<div class="card">
						<div class="card-body">
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Telefono</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" id="telefono" class="form-control" value="{{ Auth::user()->telefono }}">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Direccion</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" id="direccion" class="form-control" value="{{ Auth::user()->direccion }}">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Codigo Postal</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" id="cp" class="form-control"value="{{ Auth::user()->cp }}" >
								</div>
							</div>
						
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
									<a href="/PerfilUsuario" type="button" id="btnUpdate" class="btn btn-primary px-4" >Guardar Cambios</a>
							</div>
						</div>
					</div>
      
              

            </div>
          </div>

        </div>
    </div>

    <script type="text/javascript">
$("#btnUpdate").on('click',function(){
    $.ajaxSetup({
     headers: {
        'Authorization':"Bearer "+getCookie('token')
           
     }
    }); 
    var telefono=document.getElementById("telefono").value;
    var direccion=document.getElementById("direccion").value;
    var cp=document.getElementById("cp").value;
    if (telefono && direccion && cp){
    $.ajax({
          url:"{{route('user.update',Auth()->user()->id)}}",
          data:{'telefono':telefono,'direccion':direccion,'cp':cp},
          type:'put',
          success: function (response) {
          alert("Datos Actualizados Correctamente")
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

@endsection

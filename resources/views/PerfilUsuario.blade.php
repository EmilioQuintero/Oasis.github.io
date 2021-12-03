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
                     <a href="{{url('/EditarUsuario')}}" class="btn btn-outline-primary">{{ __('Editar Perfil') }}</a>
                  </li>
                  
                </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">

                <div class="row">
                    <div class="col-sm-3">
                      <h4 class="mb-0">Informacion</h4>
                      <br>
                    </div>

                  </div>
        
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nombre: </h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ Auth::user()->name }} {{ Auth::user()->apellido_paterno }} {{ Auth::user()->apellido_materno }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Correo Electronico: </h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{ Auth::user()->email}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Telefono: </h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{ Auth::user()->telefono }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Direccion: </h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{ Auth::user()->direccion }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Codigo Postal: </h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{ Auth::user()->cp }}
                    </div>
                  </div>
        
                </div>
              </div>
      
              @if(Auth::user()->tipo_usuario==1)
              <div class="row gutters-sm">
                <div class="col-sm-12 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                        <h4>Tus Polizas</h4>

                      </div>
                    </div>
                  </div>
                </div>
              @endif
            </div>
          </div>

        </div>
    </div>



@endsection

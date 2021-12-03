@extends('layouts.app')

@section('content')

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="description" content="" />
<meta name="author" content="" />
<title>Aseguradora Oasis</title>
<!-- Favicon-->
<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
<!-- Bootstrap icons-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

</head>

<body>
    <!-- Header-->
    <header class="">
        <div style="background-image: url('assets/Fondo.jpg'); background-size:cover; background-repeat: no-repeat;   background-position-x:center;">
            <div class="container">
                    <div class=" p-1 text-center ">
                        <img src="assets/oasis.png" aling="center" width="295" height="151">
                        <h1 class="m-4 m-lg-2">
                            <h4 class="display-7 fw-bold" >Bienvenido a Aseguradora Oasis</h4>
                            <p class="fs-7">Donde nosotros se la aseguramos.</p>
                    </div>

            </div>
    </header>
    <!-- Page Content-->
    <br>
    <div class="container text-center">  
        <b style="font-size:160%;">Paquetes Disponibles</b>
    </div>
    <br>
    <section class="py-5">

    <a href=""></a>
    
        <div class="container px-lg-6">
            <!-- Page Features-->
            <div class="row gx-lg-5">
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div  class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4 "><img src=" assets/seguro.png"  width="55" height="55" ></div>
                            <a href="{{url('CrearPoliza')}}" class="fs-4 fw-bold">Paquete Economico</a>
                            <p class="mb-0">
                            <li>Servicio 1</li>
                            <li>Servicio 2</li>
                            <li>Servicio 3</li>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><img src=" assets/mantenimiento.png"  width="55" height="55" ></div>
                            <a href="{{url('CrearPoliza')}}" class="fs-4 fw-bold">Paquete Economico</a>
                            <p class="mb-0"> Bootstrap</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><img src=" assets/sensor-3d.png"  width="55" height="55" ></div>
                            <h2 class="fs-4 fw-bold">C</h2>
                            <p class="mb-0"> Bootstrap</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><img src=" assets/seguro.png"  width="55" height="55" ></div>
                            <h2 class="fs-4 fw-bold">D</h2>
                            <p class="mb-0"> Bootstrap</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><img src=" assets/mantenimiento.png"  width="55" height="55" ></div>
                            <h2 class="fs-4 fw-bold">E</h2>
                            <p class="mb-0"> Bootstrap</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><img src=" assets/sensor-3d.png"  width="55" height="55" ></div>
                            <h2 class="fs-4 fw-bold">F</h2>
                            <p class="mb-0"> Bootstrap</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-3 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Aseguradora Oasis 2021</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>



@endsection

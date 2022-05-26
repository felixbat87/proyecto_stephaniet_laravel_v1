<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('proyecto_muci/assets/vendor/bootstrap/css/bootstrap.min.css')}}" />
        <link href="{{asset('proyecto_muci/assets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('proyecto_muci/assets/libs/css/style.css')}}" />
        <link rel="stylesheet" href="{{asset('proyecto_muci/assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}" />

        <link href="{{asset('proyecto_muci/css/estilo.css')}}" rel="stylesheet" type="text/css" />

        <title>Perfil del usuario</title>
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('proyecto_muci/assets/images/museo.png')}}" />
    </head>

    <script>
        src = "https://code.jquery.com/jquery-3.4.1.min.js";
        integrity = "sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=";
        crossorigin = "anonymous";
    </script>

    <style>
        table, td, th { border: 1px solid #e6e6f2; }

    </style> 

    
    <body class="hidden">
        <div class="dashboard-main-wrapper">
            <!-- ==============PRELOADER================ -->
            <div class="centrar" id="onload">
                <div class="lds-roller">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            <!-- ============================================================== -->
            <div class="dashboard-header">
                <nav class="navbar navbar-expand-lg bg-white fixed-top">
                    <a href="">
                        <img src="{{asset('proyecto_muci/assets/images/logoh.png')}}" />
                        <!--LOGO-!-->
                    </a>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fas fa-th"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto navbar-right-top">
                            <li class="nav-item dropdown nav-user">
                                <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="{{asset('proyecto_muci/assets/images/museo.png')}}" alt="" class="user-avatar-md rounded-circle" />
                                </a>
                                <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                    <div class="nav-user-info">
                                       <!-- ADMINISTRADOR/CERRAR SESION -->
                                       <h5 class="mb-0 text-white nav-user-name"><b>Administrador</b></h5>
                                    </div>
                                    <a class="dropdown-item" href="/Salir"><i class="fas fa-power-off mr-2"></i>Cerrar sesión</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- ============================================================== -->
            <!-- end navbar -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- left sidebar -->
            <!-- ============================================================== -->
            <div class="nav-left-sidebar sidebar-dark">
                <div class="menu-list">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav flex-column">
                                <li class="nav-divider">
                                    Menú Administrador
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1">
                                        <i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span>
                                    </a>
                                    <div id="submenu-1" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-2" aria-controls="submenu-1-2">Gestionar</a>
                                                <div id="submenu-1-2" class="collapse submenu" style="">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="/new_user">Añadir usuario</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="/listado">Ver listado de usuarios</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="influence-profile">
                <div class="container-fluid dashboard-content">
                    <!-- ============================================================== -->
                    <!-- pageheader -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                            @foreach ($vizualizar as $recibo)
                                <h3 class="mb-2">Perfil del usuario: {{$recibo->NOMBRE}} {{$recibo->APELLIDO}}</h3>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="/listado" class="breadcrumb-link">Usuarios registrados</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Ver</li>
                                            <br />
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"> 
                            <div class="card">
                                <h5 class="card-header">Mostrando la información del usuario solicitado:</h5>

                                <div class="col-xl-12 col-lg-4 col-md-12 col-sm-12 col-12">
                                    <br />
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="user-avatar text-center d-block">
                                                <img src="{{asset('proyecto_muci/assets/images/mucilogo5.jpg')}}" alt="User Avatar" class="rounded-circle user-avatar-xxl" />
                                            </div>
                                            <div class="text-center">
                                                <!-- NOMBRE -->
                                                
                                                <h2 class="font-24 mb-0">{{$recibo->NOMBRE}} {{$recibo->APELLIDO}}</h2>
                                            </div>

                                            <div class="card-body border-top">
                                                <h3 class="font-16">Datos personales</h3>
                                                <div class="">
                                                    
                                                    <ul class="list-unstyled mb-0">

                                                        <!-- CORREO ELECTRONICO -->
                                                        <li class="mb-2"><i class="fas fa-address-card mr-2"></i>Nombre de usuario: {{$recibo->NOMBRE_USUARIO}}</li>
                                                        <li class="mb-2"><i class="fas fa-fw fa-envelope mr-2"></i>Correo electrónico: {{$recibo->CORREO}} </li>
                                                        <li class="mb-2"><i class="fas fa-briefcase mr-2"></i>Cargo: {{$recibo->CARGO}}</li>
                                                        <li class="mb-2"><i class="fas fa-building mr-2"></i>Dirección: {{$recibo->DIRECCION}}</li>
                                                        <li class="mb-2"><i class="fas fa-lock mr-2"></i>Contraseña: {{$recibo->PASSWORD}} </li>
                                                        <li class="mb-2"><i class="fas fa-calendar-alt mr-2"></i>Fecha de registro: {{$recibo->created_at}}</li>
                                                        <li class="mb-2"><i class="fas fa-history mr-2"></i>Última actualización: {{$recibo->updated_at}}</li>
                                                    </ul>
                                                    @endforeach
                                                </div>
                                            </div>


                                            <h3 class="card-header"><center>Horas laboradas del usuario</center></h5>
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Fecha</th>
                                                        <th scope="col">Hora de Entrada</th>
                                                        <th scope="col">Hora de Salida</th>
                                                        <th scope="col">Horas Trabajadas</th>
                                                        <th scope="col">Horas Compensatorias</th>
  
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($multiconsulta as $data)
                                                    <tr>
                                                        <td>{{$data->FECHA}}</td>
                                                        <td>{{$data->ENTRADA}}</td>
                                                        <td>{{$data->SALIDA}}</td>
                                                        <td>{{$data->HORAS_TRABAJADAS }}</td>
                                                        <td>{{$data->HORAS_EXTRAS}}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                                </table>
                                                <br><br>
                                            <h3 class="card-header"><center>Horas Totales del Usuario</center></h5>
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Horas Compensatorias Totales</th>
                                                        <th scope="col">Horas Trabajadas Totales</th>
  
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                            @foreach ($calculo_comp as $data1)
                                                            <td>{{ $data1->HORAS_COMP }}</td>
                                                            @endforeach
                                                            @foreach ($horas_trabajadas as $data2)
                                                            <td>{{$data2->HORAS }}</td>
                                                            @endforeach
                                                </tbody>
                                            </table>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- ============================================================== -->
        </div>

        <!-- Optional JavaScript -->
        <!-- jquery 3.3.1  -->
        <script src="{{asset('proyecto_muci/assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
        <!-- bootstap bundle js -->
        <script src="{{asset('proyecto_muci/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
        <!-- slimscroll js -->
        <script src="{{asset('proyecto_muci/assets/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
        <!-- main js -->
        <script src="{{asset('proyecto_muci/assets/libs/js/main-js.js')}}"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="{{asset('proyecto_muci/js/codigo.js')}}"></script>
    </body>
</html>

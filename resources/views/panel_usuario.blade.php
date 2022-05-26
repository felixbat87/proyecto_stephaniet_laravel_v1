<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Bootstrap CSS -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('proyecto_muci/assets/images/museo.png')}}" >
        <link rel="stylesheet" href="{{asset('proyecto_muci/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
        <link href="{{asset('proyecto_muci/assets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('proyecto_muci/assets/libs/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('proyecto_muci/assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
        <title>Bienvenido al Sistema</title>
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('proyecto_muci/assets/images/museo.png')}}" />
        <link href="{{asset('proyecto_muci/css/estilo.css')}}" rel="stylesheet" type="text/css">
    </head>

    <script>
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"
    </script>



<!-- <style>
    html,
    body {
        background: url(bg/fondito1-3.png);
        background-repeat: no-repeat;
        background-size: 200% 70%;
    }

    </style> -->


    <body class="hidden">
        @foreach ($consulta_perfil as $data)

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
                                        <!-- nombre de usuario al iniciar sesión -->
                                        <h5 class="mb-0 text-white nav-user-name"><b>{{$data->NOMBRE_USUARIO}}</b></h5>
                                    </div>
                                    <a class="dropdown-item" href="/perfil"><i class="fas fa-user mr-2"></i>Perfil</a>
                                    <a class="dropdown-item" href="/actulizar/{{Crypt::encrypt(session()->get('ID'))}}"><i class="fas fa-cog mr-2"></i>Editar datos</a>
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
                <div class="slimScrollDiv" style="position relative; overflow: hidden; width: auto; height 100%;">
                    <div class="menu-list" style="overflow: hidden; width: auto; height: 100%;">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav flex-column">
                                    <li class="nav-divider">
                                        Menú
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1">
                                            <i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span>
                                        </a>
                                        <div id="submenu-1" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-2" aria-controls="submenu-1-2">Cuenta</a>
                                                    <div id="submenu-1-2" class="collapse submenu" style="">
                                                        <ul class="nav flex-column">
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="/perfil">Datos Personales</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="/actulizar/{{Crypt::encrypt(session()->get('ID'))}}">Editar datos personales</a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="/recibiendo">Horas Laboradas</a>
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
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
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
                                
                                
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="" class="breadcrumb-link"></a></li>
                                            <br>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- content -->
                    <!-- ============================================================== -->
                    
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- profile -->
                        <!-- ============================================================== -->
                        <div class="col-sm-9 col-md-6 col-lg-8 col-xl-12">
                            <!-- ============================================================== -->
                            <!-- card profile -->
                            <!-- ============================================================== -->
                            <div class="card">
                                <div class="card-body">
                                    
                                    <div class="user-avatar text-center d-block">
                                        <img src="{{asset('proyecto_muci/assets/images/mucilogo5.jpg')}}" alt="User Avatar" class="rounded-circle user-avatar-xxl" />
                                    </div>
                                    <div class="text-center">
                                        <!-- NOMBRE -->
                                        
                                        <h2 class="font-24 mb-0">¡Bienvenid@!</h2><br><br><br>
                                        <h3 class="font-24 mb-0">{{$data->NOMBRE}} {{$data->APELLIDO}} </h3><br><br>
                                        @endforeach
                                    </div>
                                </div>
                                
                                <center>
                                <div class="card-body border-top1">
                                    <h3 class="font-16">Hora:</h3>
                                    <h1 class="mb-0" id="HoraActual"></h1>
                                </div>
                            </div>

                        </div>

                    </div>


                </div>
            </div>
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            
        </div>

        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- Optional JavaScript -->
        <!-- jquery 3.3.1  -->
        <script src="{{asset('proyecto_muci/assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('proyecto_muci/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
        <script src="{{asset('proyecto_muci/assets/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('proyecto_muci/assets/libs/js/main-js.js')}}"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script src="{{'proyecto_muci/js/codigo.js'}}"></script>
       
    </body>
</html>

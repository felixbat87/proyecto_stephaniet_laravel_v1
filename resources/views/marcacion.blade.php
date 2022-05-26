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

        <title>Creación de usuarios</title>
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('proyecto_muci/assets/images/museo.png')}}" />
    </head>

    <body class="hidden">
        <!-- main wrapper -->
        <!-- ============================================================== -->
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
                                    <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Cerrar sesión</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
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
                                <h3 class="mb-2">Registro de horas laboradas</h3>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="/listado" class="breadcrumb-link">Listado de Usuarios</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Registro de horas laboradas</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->

                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->

                        <div class="col-sm-9 col-md-6 col-lg-8 col-xl-12">
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <div class="card">
                                <h5 class="card-header">Ingrese las horas laboradas del usuario:</h5>
                                <div class="card-body">
                                    <h3 class="font-16">Las horas deben ser ingresadas en formato militar (24:00hrs)</h3>

                                    <div class="card-body">
                                        <form action="{{route('resultado')}}" method="POST">
                                        @csrf
                                            <hidden name="code" value=""></hidden>
                                            <label for="" class="form-group">Hora de Entrada:</label>
                                            <input type="time" class="form-group" name="entrada" class="time" />&nbsp;&nbsp;
                                            <label for="" class="form-group">Hora de Salida:</label>
                                            <input type="time" class="form-group" name="salida" class="time" /><br />
                                            <br />
                                            <button type="submit" class="btn btn-primary">Añadir Horas Trabajadas</button>
                                            <button type="#" class="btn btn-info">Importar archivo CSV <i class="fas fa-upload"></I></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- end main wrapper -->
        <!-- ============================================================== -->

        <!-- Optional JavaScript -->
        <!-- jquery 3.3.1  -->
        <script src="{{asset('proyecto_muci/assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
        <!-- bootstap bundle js -->
        <script src="{{asset('proyecto_muci/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
        <!-- slimscroll js -->
        <script src="{{asset('proyecto_muci/assets/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
        <!-- main js -->
        <script src="{{asset('proyecto_muci/assets/libs/js/main-js.js')}}"></script>

        <script src="{{asset('proyecto_muci/assets/vendor/parsley/parsley.js')}}"></script>

        <!-- Esto es del preloader -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="{{asset('proyecto_muci/js/codigo.js')}}"></script>
    </body>
</html>

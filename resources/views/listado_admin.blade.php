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

    <title>Lista de usuarios</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/museo.png" />
</head>

<script>
    src = "https://code.jquery.com/jquery-3.4.1.min.js"
    integrity = "sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin = "anonymous"
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
                    <div class="col-xl-14 col-lg-14 col-md-14 col-sm-14 col-14">
                        <div class="page-header">
                            <h3 class="mb-2">Lista de usuarios en el sistema</h3>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <!-- <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="" class="breadcrumb-link"></a></li> 
                                            <li class="breadcrumb-item active" aria-current="page">suarios registrados</li>
                                            <br>
                                        </ol>  -->
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-14 col-lg-14 col-md-14 col-sm-14 col-14">
                        <div class="card">
                            <h5 class="card-header">Usuarios registrados en el sistema</h5>

                            <div class="col-xl-12 col-lg-4 col-md-12 col-sm-12 col-12">
                                <br><br>
                                <div class="card">
                                    <h5 class="card-header">Todos los usuarios</h5>
                                    <div class="card-body">
                                        <table class="table table-striped"> 
                                            <thead>
                                                <tr>
                                                    <!--<th >Código</th>-->
                                                    <th>Codigo</th>
                                                    <th>Nombre</th>
                                                    <th>Apellido</th>
                                                    <th>Usuario</th>
                                                    <th>Cargo</th>
                                                    <th>Dirección</th>
                                                    <th>E-Mail</th>
                                                    <th>Contraseña</th>
                                                    <th>Ver</th>
                                                    <th>Eliminar</th>
                                                    <th>Marcar</th>
                                                    <th>PDF</th>
                                                </tr> 
                                            </thead>
                                            <tbody>
                                                @foreach ($registros as $data) 
                                                <tr>
                                                    <td>{{$data->CODIGO_USUARIO}}</td>
                                                    <td>{{$data->NOMBRE}}</td>
                                                    <td>{{$data->APELLIDO}}</td>
                                                    <td>{{$data->NOMBRE_USUARIO}}</td>
                                                    <td>{{$data->CARGO}}</td>
                                                    <td>{{$data->DIRECCION}}</td>
                                                    <td>{{$data->CORREO}}</td>
                                                    <td>{{$data->PASSWORD}}</td>
                                                    <td><a href="/user/{{Crypt::encrypt($data->CODIGO_USUARIO)}}" class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a></td>
                                                    <td><a href="/eleminar/{{$data->CODIGO_USUARIO}}" class="btn btn-danger btn-sm" onclick="myFunction()"><i class="fas fa-trash-alt"></i></a></td>
                                                    <td><a href="/marcacion/{{$data->CODIGO_USUARIO}}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a></td>
                                                    <td><a href="/pdf_view/{{Crypt::encrypt($data->CODIGO_USUARIO)}}" class="btn btn-info btn-sm" target=“_blank”><i class="fas fa-file-pdf"></i></a></td>
                                                   
                                                </tr>
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

    <script>
        function myFunction() {
            confirm("¿Está seguro de que desea eliminar a este usuario?");
        }
    </script>

</body>

</html>
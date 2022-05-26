<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('proyecto_muci/assets/vendor/bootstrap/css/bootstrap.min.css') }}" />
    <link href="{{ asset('proyecto_muci/assets/vendor/fonts/circular-std/style.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('proyecto_muci/assets/libs/css/style.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('proyecto_muci/assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}" />

    <link href="{{ asset('proyecto_muci/css/estilo.css') }}" rel="stylesheet" type="text/css" />

    <title>Editar datos personales</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('proyecto_muci/assets/images/museo.png') }}" />
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
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a href="">
                    <img src="{{ asset('proyecto_muci/assets/images/logoh.png') }}" />
                    <!--LOGO-!-->
                </a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="fas fa-th"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">

                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('proyecto_muci/assets/images/museo.png') }}" alt=""
                                    class="user-avatar-md rounded-circle" />
                            </a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown"
                                aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <!-- nombre de usuario al iniciar sesión -->
                                    @foreach ($consulta as $data1)
                                    <h5 class="mb-0 text-white nav-user-name"><b>{{$data1->NOMBRE_USUARIO}}</b></h5>
                                    @endforeach
                                </div>
                                <a class="dropdown-item" href="/perfil"><i class="fas fa-user mr-2"></i>Perfil</a>
                                <a class="dropdown-item" href="/actulizar/{{Crypt::encrypt(session()->get('ID'))}}"><i class="fas fa-cog mr-2"></i>Editar
                                    datos</a>
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

        <div class="nav-left-sidebar sidebar-dark">
            <div class="slimScrollDiv" style="position relative; overflow: hidden; width: auto; height 100%;">
                <div class="menu-list" style="overflow: hidden; width: auto; height: 100%;">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav flex-column">
                                <li class="nav-divider">
                                    Menú
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false"
                                        data-target="#submenu-1" aria-controls="submenu-1">
                                        <i class="fa fa-fw fa-user-circle"></i>Dashboard <span
                                            class="badge badge-success">6</span>
                                    </a>
                                    <div id="submenu-1" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#" data-toggle="collapse"
                                                    aria-expanded="false" data-target="#submenu-1-2"
                                                    aria-controls="submenu-1-2">Cuenta</a>
                                                <div id="submenu-1-2" class="collapse submenu" style="">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="/perfil">Datos Personales</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="/actulizar/{{Crypt::encrypt(session()->get('ID'))}}">Editar datos
                                                                personales</a>
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
                            <h3 class="mb-2">Editar perfil</h3>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/perfil" class="breadcrumb-link">Perfil del
                                                usuario</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Editar datos</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- valifation types -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">No olvide guardar los cambios al finalizar</h5>
                            <div class="card-body">
                                <form action="{{ route('estado_cambiado') }}" method="POST" id="validationform">
                                    @csrf

                                    <div class="form-group row">
                                        @foreach ($consulta as $data)
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Nombre</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input name="nombre" type="text" placeholder="Ingrese su nombre"
                                                    class="form-control" value="{{ $data->NOMBRE }}" />
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Apellido</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input name="apellido" type="text" placeholder="Ingrese su apellido"
                                                class="form-control" value="{{ $data->APELLIDO }}" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Nombre de
                                            usuario</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input name="nombre_usuario" type="text" placeholder="Ingrese su apellido"
                                                class="form-control" value="{{ $data->NOMBRE_USUARIO }}" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Cargo</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input name="cargo" type="text" placeholder="Ingrese su cargo"
                                                class="form-control" value="{{ $data->CARGO }}" disabled />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Dirección</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input name="direccion" type="text"
                                                placeholder="Ingrese la dirección a la que pertenece"
                                                class="form-control" value="{{ $data->DIRECCION }}" disabled />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Correo
                                            electrónico</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input name="email" type="email" placeholder="Ingrese su correo electrónico"
                                                class="form-control" value="{{ $data->CORREO }}" disabled />
                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Contraseña</label>
                                        <div class="campo" class="col-sm-4 col-lg-3 mb-3 mb-sm-0">

                                            <input id="password" type="password" name="password"
                                                placeholder="Ingrese su contraseña" class="form-control"
                                                value="{{ $data->PASSWORD }}" />
                                            <span>Mostrar</span>
                                        </div>
                                        <div class="col-sm-4 col-lg-3">
                                            <input type="password" data-parsley-equalto="#password"
                                                placeholder="Confirmar contraseña" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="form-group row text-right">
                                        <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                            <button type="submit" class="btn btn-space btn-primary">Guardar</button>
                                            <a href="/perfil" class="btn btn-space btn-secondary">Cancelar</a>
                                        </div>
                                    </div>
                                    @endforeach
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end valifation types -->
                    <!-- ============================================================== -->
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- footer -->

        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    </div>

    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->

    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1  -->
    <script src="{{ asset('proyecto_muci/assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <!-- bootstap bundle js -->
    <script src="{{ asset('proyecto_muci/assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <!-- slimscroll js -->
    <script src="{{ asset('proyecto_muci/assets/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('proyecto_muci/assets/libs/js/main-js.js') }}"></script>

    <script src="{{ asset('proyecto_muci/assets/vendor/parsley/parsley.js') }}"></script>

    <script>
        $("#form").parsley();
    </script>
    <script>
        // Esto supuestamente verifica si las passwords son iguales
        (function() {
            "use strict";
            window.addEventListener(
                "load",
                function() {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName("needs-validation");
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener(
                            "submit",
                            function(event) {
                                if (form.checkValidity() === false) {
                                    event.preventDefault();
                                    event.stopPropagation();
                                }
                                form.classList.add("was-validated");
                            },
                            false
                        );
                    });
                },
                false
            );
        })();
    </script>

    <script>
        function myFunction() {
            alert("Los cambios se han guardado.");
        }
    </script>

  <!--<script type="text/JavaScript">
        //No Copiar texto
      var message="NoRightClicking";
      function defeatIE() {if (document.all) {(message);return false;}}
      function defeatNS(e) {if 
      (document.layers||(document.getElementById&&!document.all)) {
      if (e.which==2||e.which==3) {(message);return false;}}}
      if (document.layers) 
      {document.captureEvents(Event.MOUSEDOWN);document.onmousedown=defeatNS;}
      else{document.onmouseup=defeatNS;document.oncontextmenu=defeatIE;}
      document.oncontextmenu=new Function("return false")
      </script>-->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('proyecto_muci/js/codigo.js') }}"></script>
</body>

</html>

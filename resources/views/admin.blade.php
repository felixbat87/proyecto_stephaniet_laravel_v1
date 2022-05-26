<!doctype html>
<html lang="es">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inicio de Sesión Administrador</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('proyecto_muci/assets/images/museo.png')}}" >

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('proyecto_muci/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('proyecto_muci/assets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('proyecto_muci/assets/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('proyecto_muci/assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">

    <!-- Preloader -->
    <link href="{{asset('proyecto_muci/css/estilo.css')}}" rel="stylesheet" type="text/css">
    <!-- Mostrar/ocultar contraseña -->
	<style>
    html,
    body {      
        height: 100%;
    }
    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background: url({{asset('proyecto_muci/bg/fondito6.png')}});
        background-repeat: no-repeat;
        background-size: 100% 150%;
    }
    </style>
</head>
<body class="hidden">
    <!-- login -->
    <div class="splash-container">
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
        <!-- ==============PRELOADER================ -->
        <div class="card">
            <div class="card-header text-center">
                <img class="logo-img" src="{{asset('proyecto_muci/assets/images/museo.png')}}" alt="logo" />
                <span class="splash-description">Bienvenido. Ingrese sus credenciales.</span>
            </div>
            <!-- ======================AQUI VA EL ALERT======================= -->
            <!-- <div class="alert3 alert-danger" role="alert">
                    <strong>Error</strong>
                 </div>  -->
            <!-- ======================AQUI VA EL ALERT======================= -->

            <div class="card-body">
                <form action="{{route('proceso-admin')}}" method="post">
                  @csrf
                    <div class="form-group">
                        <center>
                            <input name="txt_usuario" required="" type="text" placeholder="Usuario" autocomplete="off" class="form-control form-control-lg" value="" />
                            <span class="invalid-feedback">Nombre de usuario o contraseña incorrectos</span>
                        </center>
                    </div>
                    <center>
                        <div class="form-group" >
                            <div class="campo2" >
                                <input name="txt_pass" required="" type="password" id ="password" placeholder="Contraseña" class="form-control form-control-lg" /><span>Mostrar</span>
                                <!-- <span class="invalid-feedback">Nombre de usuario o contraseña incorrectos</span> -->
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg btn-block">Ingresar</button>
                    </center>
                </form>
            </div>
           

                    <script src="{{asset('proyecto_muci/assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
                    <script src="{{asset('proyecto_muci/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                    <script src="{{asset('proyecto_muci/js/codigo.js')}}"></script>
                    <!-- Para el preloader -->
                
           
        </div>
    </div>

</body>

 
</html>
<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="Refresh" content="5;url=/usuario">
        <title>Inicio de Sesión</title>
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('proyecto_muci/assets/images/museo.png')}}" >
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('proyecto_muci/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
        <link href="{{asset('proyecto_muci/assets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('proyecto_muci/assets/libs/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('proyecto_muci/assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    
        <!-- Preloader -->
        <link href="{{asset('proyecto_muci/css/estilo.css')}}" rel="stylesheet" type="text/css">
    

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
                background: url(proyecto_muci/bg/fondito6.png);
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
                    <span class="splash-description">Su contraseña se muestra a continuación: </span>
                </div>
                <div class="card-body">
                    <form>
                        <center>
                          @foreach ( $consul as $data )
                            
                          
                            <div class="form-group">
                                <!-- ================================================================================== -->
                              </div>
                              <h3 class="text-dark mb-1">{{$data ->PASSWORD}}</h3>

                            <div class="form-group">
                                <!-- ================================================================================== -->
                                <br><br>
                                <h4 class="text-dark mb-1">Será redireccionado en<img src="{{asset('proyecto_muci/assets/images/5s.gif')}}" width="30"/>...</h4> 
                                
                            </div>
                            @endforeach
                            <script type="text/javascript">
                            function redireccionar(){
                              window.locationf="/usuario";
                            }
                            setTimeout("redireccionar()", 5000);
                            </script>
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

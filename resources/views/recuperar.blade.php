<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
                    <img class="logo-img" src="assets/images/museo.png" alt="logo" />
                    <span class="splash-description">Ingrese su correo electrónico para recuperar su contraseña.</span>
                </div>
                    <!-- ======================AQUI VA EL ALERT======================= -->
                    @if (session()->has('error'))
                    <div class="alert2 alert-danger" role="alert">
                      <strong>Error{{session()->get('error')}}</strong>
                  </div>
                  @endif
                    <!-- ======================AQUI VA EL ALERT======================= -->
                <div class="card-body">
                    <form action="{{route('recuperacion')}}" method="post">
                        @csrf
                        <center>
                            <div class="form-group">
                                <input class="form-control form-control-lg" type="email" name="txt_email" required="" placeholder="Correo electrónico" autocomplete="off" />
                                <span class="invalid-feedback"></span>

                                <!-- ==============En caso de nombre de usuario o contraseña incorrecta================ -->

                                <!-- ================================================================================== -->
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg btn-block">Recuperar contraseña</button>
                        </center>
                    </form>
                </div>

                <div class="card-footer bg-white p-0">
                    <center>
                        <div class="card-footer text-center">
                            <span><a href="usuario">Volver</a></span>
                        </div>

                        <script src="{{asset('proyecto_muci/assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
                        <script src="{{asset('proyecto_muci/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
                        <script src="{{'proyecto_muci/js/codigo.js'}}"></script>
                        <!-- Para el preloader -->
                    </center>
                </div>
            </div>
        </div>
    </body>
</html>

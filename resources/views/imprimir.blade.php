<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Pagina que se transformará a PDF y podrá imprimirse -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Imprimir</title>
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/museo.png" />
        <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet" />
    </head>

    <style>
        h2, h3, h5, p {font-family: 'Circular Std Medium';}

        table,td, th { border: 2px solid #005F54; font-weight: normal; 
            font-family: 'Circular Std Medium';}

        table { border-collapse: collapse; margin: auto; }

        td, th { width: 100px; height: 30px; }



    </style>

    <body>
        <center>
            <img src="proyecto_muci/assets/images/imprimir.png">
                <!-- NOMBRE -->
                @foreach ($vizualizar as $recibo)
                <h2>{{ $recibo->NOMBRE }} {{ $recibo->APELLIDO }}</h2>
                <br>
                <h3>Datos personales</h3>
                        <!-- CORREO ELECTRONICO -->
                        <p>Nombre de usuario: {{ $recibo->NOMBRE_USUARIO }}</p>
                        <p>Correo electrónico: {{ $recibo->CORREO }}</p>
                        <p>Cargo: {{ $recibo->CARGO }} </p>
                        <p>Dirección: {{ $recibo->DIRECCION }} </p>
                        <!-- <p>Contraseña: {{ $recibo->PASSWORD }} </p> -->
                        <p>Fecha de registro: {{ $recibo->created_at }}</p>
                        <p>Última actualización: {{ $recibo->updated_at }} </p>
                @endforeach
            <h3 class="card-header">Horas laboradas del usuario</h3>
            <table>
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
                    @foreach ($multiconsulta as $data)
                    <tr>
                        <td>{{ $data->FECHA }}</td>
                        <td>{{ $data->ENTRADA }}</td>
                        <td>{{ $data->SALIDA }}</td>
                        <td>{{ $data->HORAS_TRABAJADAS }}<</td>
                        <td>{{ $data->HORAS_EXTRAS }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <br><br>
            <h3 class="card-header">Horas Totales del Usuario</h3>
            <table>
                <thead>
                    <tr>
                        <th scope="col">Horas Compensatorias Totales</th>
                        <th scope="col">Horas Trabajadas Totales</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        @foreach ($calculo_comp as $data1)
                        <td>{{ $data1->HORAS_COMP }}</td>
                        @endforeach
                        @foreach ($horas_trabajadas as $data2)
                        <td>{{$data2->HORAS }}</td>
                        @endforeach
                    </tr>
                </tbody>
            </table>

            <br>
            <!-- <button onclick="window.print()">Imprimir pantalla con otro ejemplo</button> -->

            <!-- ============================================================== -->
            <!-- ============================================================== -->
        </center>
    </body>
</html>

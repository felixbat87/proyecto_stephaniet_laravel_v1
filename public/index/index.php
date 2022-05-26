<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Administración del tiempo compensatorio y vacaciones.</title>
        <link rel="shortcut icon" type="image/x-icon" href="images/museo.png" />

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet" />

        <link rel="stylesheet" href="css/owl.carousel.min.css" />
        <link rel="stylesheet" href="css/owl.theme.default.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css" />
        <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/libs/css/style.css" />
        <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css" />
    </head>

    <body>
        <div class="home-slider owl-carousel js-fullheight">
            <div class="slider-item js-fullheight" style="background-image: url(images/slider-1.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                        <div class="col-md-12 ftco-animate">
                            <div class="text w-100 text-center">
                                <h2>Administración del tiempo compensatorio y vacaciones</h2>
                                <h1 class="mb-3">Museo del Canal Interoceánico de Panamá</h1>
                                <a href="../First/login.php" class="btn btn-primary">Acceder</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item js-fullheight" style="background-image: url(images/slider-4.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                        <div class="col-md-12 ftco-animate">
                            <div class="text w-100 text-center">
                                <h2>Administración del tiempo compensatorio y vacaciones</h2>
                                <h1 class="mb-3">Museo del Canal Interoceánico de Panamá</h1>
                                <a href="../First/login.php" class="btn btn-primary">Acceder</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item js-fullheight" style="background-image: url(images/slider-5.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                        <div class="col-md-12 ftco-animate">
                            <div class="text w-100 text-center">
                                <h2>Administración del tiempo compensatorio y vacaciones</h2>
                                <h1 class="mb-3">Museo del Canal Interoceánico de Panamá</h1>
                                <a href="../First/login.php" class="btn btn-primary">Acceder</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/main.js"></script>

        <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
        <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
        <script src="assets/libs/js/main-js.js"></script>

        <script>
            $(".collapse")
                .on("shown.bs.collapse", function () {
                    $(this).parent().find(".fa-angle-down").removeClass("fa-angle-down").addClass("fa-angle-up");
                })
                .on("hidden.bs.collapse", function () {
                    $(this).parent().find(".fa-angle-up").removeClass("fa-angle-up").addClass("fa-angle-down");
                });

            $(".panel-heading a").click(function () {
                $(".panel-heading").removeClass("active");

                //If the panel was open and would be closed by this click, do not active it
                if (!$(this).closest(".panel").find(".panel-collapse").hasClass("in")) $(this).parents(".panel-heading").addClass("active");
            });
        </script>
    </body>
</html>

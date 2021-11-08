<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GDALab</title>

    <!-- Encabezado Bienvenida css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('Pagina/css/encabezado.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('Pagina/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Pagina/css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Pagina/css/flaticon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Pagina/vendors/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Pagina/vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Pagina/vendors/animate-css/animate.css') }}">

    <!-- main css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('Pagina/css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Pagina/css/encabezado.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('animate/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Pagina/css/style.css?version=1.0.6') }}">


    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
</head>

<body>



    <!--================Header Menu Area =================-->
    <header class="header_area mb-12">
         <div class="top_menu row m0">
            <div class="container">
                <div class="float-center">
                    Login
                </div>
            </div>
        </div>

    </header>
    <!--================Header Menu Area =================-->

    @yield('contenido')

    <!-- start footer Area -->
    <footer class="footer-area pl-4 pr-4">
        <div class="container-fluid ">

        </div>
    </footer>
    <!-- End footer Area -->






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="{{ asset('Pagina/js/jquery-3.6.0.min.js') }}"></script>
    {{-- <script src="{{ asset('Pagina/js/jquery-2.2.4.min.js') }}"></script> --}}
    <script src="{{ asset('Pagina/js/popper.js') }}"></script>
    <script src="{{ asset('Pagina/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Pagina/js/stellar.js') }}"></script>
    <script src="{{ asset('Pagina/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('Pagina/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('Pagina/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('Pagina/js/mail-script.js') }}"></script>
    <script src="{{ asset('Pagina/js/contact.js') }}"></script>
    <script src="{{ asset('Pagina/js/jquery.form.js') }}"></script>
    <script src="{{ asset('Pagina/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('Pagina/js/theme.js') }}"></script>
    <script src="{{ asset('animate/animate.js?version=1.0.1') }}"></script>
    <script src="{{ asset('Pagina/js/bootstrap.bundle.min.js') }}"></script>

    <script>

        // Animaciones
        // alert("llego");
        wow = new WOW({
            animateClass: 'animated',
            offset: 100,
            callback: function(box) {
                console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
            }
        });
        wow.init();

        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

</body>

</html>

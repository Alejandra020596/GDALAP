<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>GDALab</title>
  <!-- Favicon -->
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/vendor/nucleo/css/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('AdminLTE/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/css/argon.css?v=1.3.4') }}" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="/css/app.css" rel="stylesheet">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="{{ asset('AdminLTE/img/brand/blue.png') }}" class="navbar-brand-img" alt="...">
        </a>
      </div>

      <div class="navbar-inner">
        @include('LayoutAdminLTE.include.menuIzquierdo')   {{-- EL MENU IZQUIERDO ESTA EN OTRO DOCUMENTO --}}
      </div>

    </div>
  </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->

          {{-- @include('LayoutAdminLTE.include.menuTop')   EL MENU TOP ESTA EN OTRO DOCUMENTO --}}

    <!-- Header -->
    <div class="header bg-primary pb-6">
      {{-- @include('LayoutAdminLTE.include.header') --}}   <!-- EL MENU HEADER ESTA EN OTRO DOCUMENTO -->
    </div>
    <!-- Header -->


    <!-- Page content -->
    <div class="container-fluid mt--6">

        <!-- CONTENIDO WEB -->

            @yield('contenido')
        <!-- END CONTENIDO WEB -->


        <!-- Footer -->
            @include('LayoutAdminLTE.include.footer')   {{-- EL MENU HEADER ESTA EN OTRO DOCUMENTO --}}
        <!-- Footer -->


    </div>
    <!-- Page content -->

  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ asset('AdminLTE/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('AdminLTE/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('AdminLTE/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('AdminLTE/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('AdminLTE/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <!-- Optional JS -->
  <script src="{{ asset('AdminLTE/vendor/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('vendor/chart.js/dist/Chart.extension.js') }}"></script>
  <!-- Argon JS -->
  <script src="{{ asset('AdminLTE/js/argon.js?v=1.2.0') }}"></script>

</body>

</html>

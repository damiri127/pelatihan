<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard | Kemahasiswaan</title>

    <!-- Google Font: Source Sans Pro -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
    />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}" />
    <!-- overlayScrollbars -->
    <link
      rel="stylesheet"
      href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}"
    />
    <!-- Icon -->
    <!-- Ionicons -->
    <link
      rel="stylesheet"
      href="{{ asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}"
    />


    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}" />
  </head>
  <body
    class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed"
  >
    <div class="wrapper">
      <!-- Preloader -->

      <!-- Navbar -->
      @include('kemahasiswaan.dashboard.layouts.header')
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      @include('kemahasiswaan.dashboard.layouts.sidebar')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Main content -->
        @yield('content')
        
      </div>

        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <strong>Copyright &copy;<a href="#">Sipena</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 1.0.0
        </div>
      </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}" ></script>
    <!-- Bootstrap -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src=" {{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>

    <!-- PAGE PLUGINS -->
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LUPMS</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/plugins/summernote/summernote-bs4.min.css">
  @yield('style')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link"  href="#" role="button">
            <i class="fas fa-comments"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>

    @include('sidebar')

    @yield('content')

  </div>

    <script src="{{asset('public/frontend')}}/plugins/jquery/jquery.min.js"></script>
    <script src="{{asset('public/frontend')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="{{asset('public/frontend')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('public/frontend')}}/plugins/chart.js/Chart.min.js"></script>
    <script src="{{asset('public/frontend')}}/plugins/sparklines/sparkline.js"></script>
    <script src="{{asset('public/frontend')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{asset('public/frontend')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <script src="{{asset('public/frontend')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
    <script src="{{asset('public/frontend')}}/plugins/moment/moment.min.js"></script>
    <script src="{{asset('public/frontend')}}/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="{{asset('public/frontend')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="{{asset('public/frontend')}}/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="{{asset('public/frontend')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="{{asset('public/frontend')}}/dist/js/adminlte.js"></script>
    <script src="{{asset('public/frontend')}}/dist/js/demo.js"></script>
    <script src="{{asset('public/frontend')}}/dist/js/pages/dashboard.js"></script>
    @yield('script')
</body>
</html>

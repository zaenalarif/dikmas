<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pendaftaran siswa</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset("plugins/fontawesome-free/css/all.min.css")}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset("plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css")}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset("plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset("plugins/jqvmap/jqvmap.min.css")}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset("dist/css/adminlte.min.css")}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset("plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset("plugins/daterangepicker/daterangepicker.css")}}">
  <!-- summernote -->
  @yield('style')
  <link rel="stylesheet" href="{{ asset("dist/css/adminlte.min.css")}}">
  <link rel="stylesheet" href="{{ asset("plugins/summernote/summernote-bs4.css")}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">     
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset("dist/img/AdminLTELogo.png")}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">DIKMAS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset("dist/img/user2-160x160.jpg")}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ url("siswa") }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Home
              </p>
            </a>
          </li>

          <li class="nav-item mt-5">
            <a href="{{ url("siswa") }}">
              <form action="{{ url("/logout") }}" method="post">
                @csrf
                <input type="submit" value="Logout" class="btn btn-primary btn-block">
              </form>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    </div>
      @yield('content')
    
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; Puji Febriani</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset("plugins/jquery/jquery.min.js")}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset("plugins/jquery-ui/jquery-ui.min.js")}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset("plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>

<!-- overlayScrollbars -->
@yield('script')
<script src="{{ asset("plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset("dist/js/adminlte.js")}}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{ asset("dist/js/demo.js")}}"></script>

  
</bodyf>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ config('app.name', 'Hatchery Management') }} | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <!-- <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> -->
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet">
  <!-- <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"> -->
  <!-- iCheck -->
  <link href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}" rel="stylesheet">
  <!-- <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css"> -->
  <!-- JQVMap -->
  <link href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}" rel="stylesheet">
  <!-- <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css"> -->
  <!-- Theme style -->
  <link href="{{ asset('dist/css/adminlte.min.css') }}" rel="stylesheet">
  <!-- <link rel="stylesheet" href="dist/css/adminlte.min.css"> -->
  <!-- overlayScrollbars -->
  <link href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}" rel="stylesheet">
  <!-- <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css"> -->
  <!-- Daterange picker -->
  <link href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet">
  <!-- <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css"> -->
  <!-- summernote -->
  <link href="{{ asset('plugins/summernote/summernote-bs4.css') }}" rel="stylesheet">
  <!-- <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css"> -->
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  
  <!-- light box -->
  <link rel="stylesheet" href="{{asset('plugins/ekko-lightbox/ekko-lightbox.css')}}">

  <!-- Custom Style Sheet -->
  <link href="{{ asset('css/custom_style.css') }}" rel="stylesheet">

  @stack('css')

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
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt f20"></i></a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 bg-black">
    <!-- Brand Logo -->
    <a href="{{route('admin.home')}}" class="brand-link">
      <img src="{{ asset('new/logo_a.png') }}" alt="Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">HMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('images/user-placeholder.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a class="d-block"> {{ Auth::user()->name }} </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{route('admin.home')}}" class="nav-link sb-active-item">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>  
            </a>
          </li>

          <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="fa fa-link nav-icon"></i>
              <p>
                New Batch
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="fa fa-link nav-icon"></i>
              <p>
                Incubator
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="fa fa-link nav-icon"></i>
              <p>
                Brooder
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="fa fa-link nav-icon"></i>
              <p>
                Cage
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="fa fa-link nav-icon"></i>
              <p>
                Completed Batches
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-link nav-icon"></i>
              <p>
                Staff
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mark Attendance</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View All</p>
                </a>
              </li>
            </ul>
          </li>

          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <!-- <div class="content-wrapper"> -->
    <!-- Content Header (Page header) -->
    
    @yield('content')
   
    <!-- /.content -->
  <!-- </div> -->
  <!-- /.content-wrapper -->
  <footer class="main-footer f-segoe">
    <strong>Copyright &copy; 2019 <a href="#" class="a-c-dm">{{ config('app.name', 'GEM GALAXY') }}</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<!-- <script src="plugins/chart.js/Chart.min.js"></script> -->
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
<!-- <script src="plugins/sparklines/sparkline.js"></script> -->
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<!-- <script src="plugins/jqvmap/jquery.vmap.min.js"></script> -->
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- <script src="plugins/jquery-knob/jquery.knob.min.js"></script> -->
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<!-- <script src="plugins/moment/moment.min.js"></script> -->
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- <script src="plugins/daterangepicker/daterangepicker.js"></script> -->
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script> -->
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- <script src="plugins/summernote/summernote-bs4.min.js"></script> -->
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> -->
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<!-- <script src="dist/js/adminlte.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
<!-- <script src="dist/js/pages/dashboard.js"></script> -->
<!-- AdminLTE for demo purposes -->
<!-- <script src="dist/js/demo.js"></script> -->
<script src="{{ asset('dist/js/demo.js') }}"></script>

<!-- Notify JS documentation  https://notifyjs.jpillora.com -->
<script src="{{ asset('js/notify.min.js') }}"></script>

<!-- Lightbox -->
<script src="{{asset('plugins/ekko-lightbox/ekko-lightbox.min.js')}}"></script>

@stack('scripts')

</body>
</html>

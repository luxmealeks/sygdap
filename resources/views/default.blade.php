<!DOCTYPE html>
<html lang="en">
<head>
 @include('header')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  @include ('navbar')
  <!-- navbar -->
<!-- aside -->
  {{-- @include ('aside') --}}
<!-- fin aside -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
     <a href="{{route('accueil')}}" class="brand-link">
      <img src="{{asset('assets/dist/img/sygdap.png')}}" alt="GESTION AGREMENTS" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SyGDAP</span>
    </a>
    <!-- Sidebar -->
  @include ('sidebar')
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
 @yield ('content')

        <!-- Control Sidebar -->
 {{--  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside> --}}
  <!-- /.control-sidebar -->
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-sm-none d-md-block">
      Anything you want!
    </div>
    <!-- Default to the left -->
            <strong>Copyright &copy; 2019 <a href="#">MEFPA</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->
@include ('scripts')
</body>
</html>

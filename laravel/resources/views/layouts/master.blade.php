<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Datatable -->
@yield('datatablecss')
  <!-- Font Awesome -->
<link rel="stylesheet" href="{{asset('admin/assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
<link rel="stylesheet" href="{{asset('admin/assets/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini accent-olive">
<!-- Site wrapper -->

<div class="wrapper">
  <!-- Navbar -->
     @include('layouts.includes._navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    @include('layouts.includes._sidebar')
  <!-- /.main sidebar container -->

  <!-- Content Wrapper. Contains page content -->
    @yield('content')
  <!-- /.content-wrapper -->

  <!-- Footer -->
    @include('layouts.includes._footer')
  <!-- /.footer -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('admin/assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/assets/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin/assets/dist/js/demo.js')}}"></script>

@yield('datatablejs')
</body>
</html>

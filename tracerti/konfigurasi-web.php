<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Konfigurasi Website | Tracer Study</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini accent-olive">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-success">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-navy elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link navbar-success">
      <img src="assets/dist/img/vokasi.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Sistem - Tracer Study</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/dist/img/avatar2.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="jenis-jawaban.php" class="nav-link">
              <i class="nav-icon fas fa-check-square"></i>
              <p>
                Jenis Jawaban
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="data-combobox.php" class="nav-link">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>
                Data Combobox
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="kategori-soal.php" class="nav-link">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Kategori Soal
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="user-profile.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Profil User
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="konfigurasi-web.php" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Konfigurasi Website
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="user-setting.php" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Pengaturan User
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="change-pass.php" class="nav-link">
              <i class="nav-icon fas fa-key"></i>
              <p>
                Pengaturan Password
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="login.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Logout</p>
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Konfigurasi Website</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Konfigurasi Website</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card card-outline card-success">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-cog"></i>
                    Form Konfigurasi Website
                </h3>
            </div>
          <div class="card-body">
            <form action="" role="form" id="quickForm">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Situs</label>
                    <input type="text" name="site_name" class="form-control" id="exampleInputEmail1" value="Tracer Study Teknologi Informasi Vokasi UB Malang" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat/Situs Pengelola</label>
                    <input type="text" name="address" class="form-control" id="exampleInputEmail1" placeholder="" value="Jl. Veteran Malang">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Telp.</label>
                    <input type="text" name="phone" value="0341 - " class="form-control" id="exampleInputEmail1" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="" value="-">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat Situs</label>
                    <input type="text" name="sites_address" class="form-control" id="exampleInputPassword1" placeholder="" value="-">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Judul Situs</label>
                    <input type="text" name="sites_nama2" class="form-control" id="exampleInputPassword1" placeholder="" value="Tracer Study TI Vokasi UB">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Keyword</label>
                    <textarea name="keyword" id="exampleInputPassword1" class="form-control" cols="30" rows="8"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Deskripsi Situs</label>
                    <textarea name="site_desc" id="exampleInputPassword1" class="form-control" cols="30" rows="8"></textarea>
                  </div>
                    <div style="margin-top: 40px;" class="form-group">
                      <button type="submit" class="btn btn-success">
                          <i style="margin-right:5px;" class="fas fa-save"></i>
                          Simpan
                      </button>
                    </div>
            </form>
        </div>  
                       
            </div>
        <!-- /.card -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Sistem Tracer Study - Vokasi UB Malang</b>
    </div>
    <strong>Copyright &copy; 2020 <a href="https://vokasi.ub.ac.id/">VOKASI UB</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
</body>
</html>

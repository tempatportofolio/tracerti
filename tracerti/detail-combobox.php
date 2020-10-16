<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Detail Data Combobox | Tracer Study</title>
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
            <h1>Data Combobox</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="data-combobox.php">Data Combobox</a></li>
              <li class="breadcrumb-item active">Detail Data Combobox</li>
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
                    <h1 class="card-title">
                        <i class="nav-icon fas fa-info-circle"></i>   
                        Detail Data Combobox
                    </h1>
                </div>
                <div class="card-body">
                    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="form-group" style="margin-left:7px;">
                                <a class="btn bg-yellow" style="padding:5px 15px;" href="data-combobox.php">
                                    <i class="fas fa-arrow-left" style="margin-right:4px; margin-top:5px;"></i>
                                    Back
                                </a>
                            </div>
                            <br>
                        </div>
                        <table style="margin-top:10px; color:red;">
                            <td style="width:200px;"><Strong>Nama Combobox</strong></td>
                            <td style="width:100px; text-align:center;"><strong>:</strong></td>
                            <td style="width:200px;"><strong>Program Studi<strong></td>
                        </table>
                        <div style="margin-top:10px;" class="row mb-2">
                            <div class="col-sm-6">
                                <div class="dataTables_wrapper dt-bootstrap4" style="margin-top:10px;">
                                   <strong>Daftar/list Nilai dari Combobox</strong>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="dataTables_wrapper dt-bootstrap4">
                                    <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#modal-success">
                                      <i class="fas fa-plus"></i>
                                      Tambah Nilai Combobox
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered table-striped dataTable table-hover" role="grid" aria-describedby="example1_info">
                                    <thead>
                                        <tr>
                                            <th>Nilai</th>
                                            <th>Keterangan</th>
                                            <th style="text-align:center;">No. Urut</th>
                                            <th style="text-align: center;vertical-align: middle;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>6001</td>
                                            <td>S3 Ilmu Ekonomi</td>
                                            <td style="text-align:center;">1</td>
                                            <td style="text-align: center;vertical-align: middle;">
                                                <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal-primary">
                                                  <i class="far fa-edit"></i>
                                                    Edit
                                                </button>
                                                <a href="delete-combobox.php" class="btn btn-sm btn-danger">
                                                <i class="far fa-trash-alt"></i>
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>68001</td>
                                            <td>S3 Ilmu Sosial</td>
                                            <td style="text-align:center;">1</td>
                                            <td style="text-align: center;vertical-align: middle;">
                                                <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal-primary">
                                                  <i class="far fa-edit"></i>
                                                    Edit
                                                </button>

                                                <a href="delete-combobox.php" class="btn btn-sm btn-danger">
                                                <i class="far fa-trash-alt"></i>
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="pagination float-right">
                                    <li class="paginate_button page-item active">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-success">
          <div class="modal-dialog">
            <div class="modal-content bg-success">
              <div class="modal-header">
                <h4 class="modal-title">
                  <i class="fas fa-plus"></i>
                    Form Tambah Nilai Combobox
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body" style="background:#fff; color:#000;">
                <form action="" role="form" id="quickForm">
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nilai</label>
                        <input type="text" name="nilai_combobox" class="form-control" id="exampleInputEmail1" placeholder="Ex : 60001">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Keterangan</label>
                        <input type="text" name="ket_combobox" class="form-control" id="exampleInputPassword1" placeholder="Ex : S3 Ilmu Ekonomi">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">No. Urut</label>
                        <input type="text" name="no_urut" class="form-control" id="exampleInputPassword1" placeholder="Ex : 1">
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-success float-right">Save Changes</button>
                      </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        
      </div>

      <div class="modal fade" id="modal-primary">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header" style="background:#ffc107; color:#000;">
              <h4 class="modal-title">
                <i class="far fa-edit"></i>
                Form Edit Data Combobox
              </h4>
              <button type="button" style="color:#000;" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body" style="background:#fff; color:#000;">
              <form action="" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Nilai</label>
                    <input type="text" class="form-control" name="nilai_combobox" value="6001" id="">
                  </div>
                  <div class="form-group">
                    <label for="">Keterangan</label>
                    <input type="text" class="form-control" name="ket_combobox" value="S3 Ilmu Ekonomi" id="">
                  </div>
                  <div class="form-group">
                    <label for="">No. Urut</label>
                    <input type="text" class="form-control" name="no_urut" value="1" id="">
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-warning float-right">Save Changes</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
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

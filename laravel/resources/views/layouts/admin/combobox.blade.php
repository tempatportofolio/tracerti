@extends('layouts.master')

@section('title')
    Data Combobox | Tracer Study
@endsection

@section('content')
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
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Data Combobox</li>
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
                        <i class="nav-icon fas fa-list-alt"></i>   
                        List Daftar Combobox
                    </h1>
                </div>
                <div class="card-body">
                    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="dataTables_wrapper dt-bootstrap4">
                                    <a href="/tambah-combobox" class="btn med btn-success float-right">
                                    <i class="fas fa-plus"></i>
                                        Tambah Data Combobox
                                    </a>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered table-striped dataTable table-hover" role="grid" aria-describedby="example1_info">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th width="30%" style="text-align: center;vertical-align: middle;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Program Studi</td>
                                            <td style="text-align: center;vertical-align: middle;">
                                                <a href="/detail-combobox" class="btn btn-sm btn-success">
                                                <i class="fas fa-info-circle"></i>
                                                    Detail
                                                </a>
                                                <a href="/edit-combobox" class="btn btn-sm btn-warning">
                                                <i class="far fa-edit"></i>
                                                    Edit
                                                </a>
                                                <a href="/hapus-combobox" class="btn btn-sm btn-danger">
                                                <i class="far fa-trash-alt"></i>
                                                    Hapus
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Perguruan Tinggi</td>
                                            <td style="text-align: center;vertical-align: middle;">
                                                <a href="/detail-combobox" class="btn btn-sm btn-success">
                                                <i class="fas fa-info-circle"></i>
                                                    Detail
                                                </a>
                                                <a href="/edit-combobox" class="btn btn-sm btn-warning">
                                                <i class="far fa-edit"></i>
                                                    Edit
                                                </a>
                                                <a href="/hapus-combobox" class="btn btn-sm btn-danger">
                                                <i class="far fa-trash-alt"></i>
                                                    Hapus
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

                        <hr>

                        <div class="card catatan bg-success">
                            <h3>
                                <i class="fas fa-info-circle"></i>
                                Catatan :
                            </h3>
                            <ul>
                              <li>Data Combobox merupakan data-data yang ditampilkan dalam soal dalam bentuk combobox</li>
                              <li>Data combobox harus ditambahkan sebelum membuat soal</li>
                              <li>Untuk menambah data list di combobox klik di icon detail</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
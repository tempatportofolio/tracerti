@extends('layouts.master')

@section('datatablecss')
<link rel="stylesheet" href="{{asset('admin/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection

@section('title')
    Bank Soal | Tracer Study
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Soal</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dasboard">Home</a></li>
              <li class="breadcrumb-item active">Soal</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-outline card-success">
              <div class="card-header">
                <h3 class="card-title">
                <i class="nav-icon fas fa-file-alt"></i>
                  Daftar Soal
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="margin-top:2px;">
                  <div class="dataTables_wrapper dt-bootstrap4">
                  <div class="row">
                      <div class="col">
                            <a href="/tambah-soal" class="btn med btn-success float-right">
                                <i class="fas fa-plus"></i>
                                Tambah Soal
                            </a>
                      </div>
                  </div>
                  <br>
                    <div class="row">
                      <div class="col-sm-6 col-md-6">
                      </div>
                      <div class="col-sm-6 col-md-1">
                        <div class="dataTables_filter">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <table style="text-align:center;" id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                          <thead>
                            <tr>
                              <th>No.</th>
                              <th>Kode</th>
                              <th>Soal</th>
                              <th>Kategori</th>
                              <th>No. Urut</th>
                              <th style="text-align: center;vertical-align: middle;">Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>f2</td>
                              <td style="text-align:left;">Menurut Anda seberapa besar penekanan perkuliahan di laksanakan di program studi Anda?</td>
                              <td>Metode Pembelajaran</td>
                              <td>1</td>
                              <td style="text-align: center;vertical-align: middle;">
                                    <a href="/detail-soal" class="btn btn-sm btn-success">
                                        <i class="fas fa-info-circle"></i>
                                        Detail
                                    </a>
                                    <a href="/edit-soal" class="btn btn-sm btn-warning">
                                    <i class="far fa-edit"></i>
                                        Edit
                                    </a>
                                    <a href="/hapus-soal" class="btn btn-sm btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                        Hapus
                                    </a>
                              </td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>f2</td>
                              <td style="text-align:left;">Menurut Anda seberapa besar penekanan demonstrasi di laksanakan di program studi Anda?</td>
                              <td>Metode Pembelajaran</td>
                              <td>2</td>
                              <td style="text-align: center;vertical-align: middle;">
                                    <a href="/detail-soal" class="btn btn-sm btn-success">
                                        <i class="fas fa-info-circle"></i>
                                        Detail
                                    </a>
                                    <a href="/edit-soal" class="btn btn-sm btn-warning">
                                    <i class="far fa-edit"></i>
                                        Edit
                                    </a>
                                    <a href="/hapus-soal" class="btn btn-sm btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                        Hapus
                                    </a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>

                    <div style="margin-top:30px; margin-right:2px;" class="row float-right">
                        <div class="dataTables_paginate paging_simple_numbers float-right" role="status" id="example1_paginate">
                          <ul class="pagination">
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
                              <li>Soal berisi kumpulan soal-soal tracer study</li>
                              <li>Untuk menambahkan jawaban pada soal klik icon detail soal</li>
                            </ul>
                        </div>
                  </div>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

@section('datatablejs')
    {{-- datatable --}}
<script src="{{asset('admin/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection
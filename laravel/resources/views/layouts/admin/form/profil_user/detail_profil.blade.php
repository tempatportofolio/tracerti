@extends('layouts.master')

@section('title')
    Detail Profil | Tracer Study
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Data Profil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item"><a href="/profil-user">Profil User</a></li>
              <li class="breadcrumb-item active">Detail Profil</li>
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
                    <i class="fas fa-info-circle"></i>
                    Detail Data Profil
                </h3>
            </div>
          <div class="card-body">
            <form role="form" id="quickForm">
                <div class="card-body">
                  <div class="form-group">
                    <a class="btn bg-yellow" style="height:35px;" href="/profil-user">
                    <i class="fas fa-arrow-left" style="margin-right:4px;"></i>
                      Back
                    </a>
                  </div>
                  <br>
                  <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered table-striped dataTable table-hover" role="grid" aria-describedby="example1_info">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Soal</th>
                                            <th>Kode Jawaban</th>
                                            <th>Jawaban</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Menurut Anda seberapa besar penekanan perkuliahan di laksanakan di program studi Anda?</td>
                                            <td>f21</td>
                                            <td>5</td>
                                            <td>Tidak Sama Sekali</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Menurut Anda seberapa besar penekanan perkuliahan di laksanakan di program studi Anda?</td>
                                            <td>f21</td>
                                            <td>5</td>
                                            <td>Tidak Sama Sekali</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        
                                    </tfoot>
                                </table>
                            </div>
                        </div>
            </form>
          </div>                 
        </div>
        <!-- /.card -->
      </div>
    </section>
  </div>
@endsection
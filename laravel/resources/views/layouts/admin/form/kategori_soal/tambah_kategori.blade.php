@extends('layouts.master')

@section('content')
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Kategori Soal</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item"><a href="/kategori-soal">Kategori Soal</a></li>
              <li class="breadcrumb-item active">Tambah Kategori Soal</li>
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
                        <i class="nav-icon fas fa-plus"></i>   
                        Form Tambah Kategori Soal
                    </h1>
                </div>
                <div class="card-body">
                    <form action="" method="" role="form" id="quickForm">
                        <div class="card-body">
                            <div class="form-group">
                              <a class="btn bg-yellow" style="height:35px;" href="/kategori-soal">
                              <i class="fas fa-arrow-left" style="margin-right:4px;"></i>
                                Back
                              </a>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Kategori</label>
                                <input type="text" name="nama_kat" class="form-control" id="exampleInputEmail1" placeholder="Contoh : Identitas">
                            </div>
                            <div style="margin-top: 30px;" class="form-group float-right">
                                <button type="submit" class="btn btn-success">
                                    <i style="margin-right:5px;" class="fas fa-save"></i>
                                    Simpan
                                </button>
                            </div>
                        </div>    
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
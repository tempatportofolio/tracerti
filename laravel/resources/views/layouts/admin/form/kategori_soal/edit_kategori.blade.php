@extends('layouts.master')

@section('title')
    Edit Kategori Soal | Tracer Study
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Kategori Soal</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item"><a href="/kategori-soal">Kategori Soal</a></li>
              <li class="breadcrumb-item active">Edit Kategori Soal</li>
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
                        <i class="nav-icon fas fa-edit"></i>   
                        Form Edit Kategori Soal
                    </h1>
                </div>
                <div class="card-body">
                    <div class="form-group">
                      <a class="btn med bg-yellow" href="/kategori-soal">
                      <i class="fas fa-arrow-left" style="margin-right:4px;"></i>
                        Back
                      </a>
                    </div>
                    <form action="" method="" role="form" id="quickForm">
                      <fieldset class="fieldset-border">
                        <legend class="legend-border">Silahkan mengubah data kategori soal pada form dibawah ini.</legend>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nama Kategori</label>
                            <input type="text" name="nama_kat" class="form-control" id="exampleInputEmail1" value="Identitas" placeholder="">
                          </div>
                          <div class="mt-1 form-group float-right">
                            <button type="submit" class="btn med btn-success">
                              <i style="margin-right:5px;" class="fas fa-save"></i>
                              Simpan
                            </button>
                          </div>    
                      </form>
                    </fieldset>

                    <hr>

                    <div class="card catatan bg-success">
                        <h3>
                            <i class="fas fa-info-circle"></i>
                            Catatan :
                        </h3>
                        <ul>
                          <li>Kategori Soal merupakan data kategori soal</li>
                          <li>Data kategori soal harus ditambahkan sebelum membuat soal</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
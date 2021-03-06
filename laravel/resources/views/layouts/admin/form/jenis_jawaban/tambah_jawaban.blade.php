@extends('layouts.master')

@section('title')
    Tambah Jenis Jawaban | Tracer Study
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Jenis Jawaban</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item"><a href="/jenis-jawaban">Jenis Jawaban</a></li>
              <li class="breadcrumb-item active">Tambah Jenis Jawaban</li>
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
                        Form Tambah Jenis Jawaban
                    </h1>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <a class="btn med bg-yellow" href="/jenis-jawaban">
                    <i class="fas fa-arrow-left" style="margin-right:4px;"></i>
                      Back
                    </a>
                  </div>
                  <fieldset class="fieldset-border">
                    <legend class="legend-border">Silahkan menambah jenis jawaban pada form dibawah ini.</legend>
                    <form action="" method="" role="form" id="quickForm">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Jenis Jawaban</label>
                          <input type="text" name="text" class="form-control" id="exampleInputEmail1" placeholder="Contoh : Text">
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
                        <li>Jenis jawawaban merupakan data jenis jawaban untuk masing-masing soal</li>
                        <li>Data jenis jawaban harus ditambahkan sebelum membuat soal</li>
                      </ul>
                  </div>
                </div>
            </div>
          </div>
      </section>
    <!-- /.content -->
  </div>
@endsection
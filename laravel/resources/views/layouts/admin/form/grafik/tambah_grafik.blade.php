@extends('layouts.master')

@section('title')
    Tambah Grafik | Tracer Study
@endsection

@section('content')
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Grafik</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item"><a href="/grafik">Grafik</a></li>
              <li class="breadcrumb-item active">Tambah Grafik</li>
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
                    <i class="fas fa-plus"></i>
                    Form Tambah Grafik
                </h3>
            </div>
          <div class="card-body">
            <div class="form-group">
                <a class="btn mt-1 med bg-yellow" href="/grafik">
                <i class="fas fa-arrow-left" style="margin-right:4px;"></i>
                Back
                </a>
            </div>
            <fieldset class="fieldset-border">
              <legend class="legend-border">Silahkan menambah grafik pada form dibawah ini.</legend>
              <form role="form" id="quickForm">
                <div class="form-group">
                  <label for="judul">Judul : </label>
                  <input type="text" class="form-control" id="judul" placeholder="Contoh : Penekanan Pelaksanaan Perkuliahan">
                </div>
                <div class="form-group">
                  <label for="soal">Soal : </label>
                  <select class="form-control" name="soal" id="soal">
                    <option value="">(f2) Menurut Anda Seberapa besar penekanan perkuliahan dilaksanakan di program studi anda?</option>
                    <option value="">(f2) Menurut Anda Seberapa besar penekanan perkuliahan dilaksanakan di program studi anda?</option>
                    <option value="">(f2) Menurut Anda Seberapa besar penekanan perkuliahan dilaksanakan di program studi anda?</option>
                    <option value="">(f2) Menurut Anda Seberapa besar penekanan perkuliahan dilaksanakan di program studi anda?</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="jenis-grafik">Jenis Grafik : </label>
                  <select name="jns_grafik" id="jenis-grafik" class="form-control">
                    <option value="">Pie</option>
                      <option value="">Batang</option>
                      <option value="">Bar</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="jenis-label">Jenis Label : </label>
                    <select class="form-control" name="jns_lbl" id="jenis-label">
                      <option value="">Persen</option>
                      <option value="">Nilai</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="tahun-lulus">Tahun Lulus : </label>
                    <select name="thn_lls" id="tahun-lulus" class="form-control">
                      <option value="">2020</option>
                      <option value="">2019</option>
                      <option value="">2018</option>
                      <option value="">2017</option>
                      <option value="">2016</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn med mt-1 btn-success">
                      <i style="margin-right:5px;" class="fas fa-save"></i>
                      Simpan
                    </button>
                  </div>
                </form>
              </fieldset>
              </div>
            </div>
        <!-- /.card -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
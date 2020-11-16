@extends('layouts.master')

@section('title')
    Konfigurasi Website | Tracer Study
@endsection

@section('content')
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
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
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
@endsection